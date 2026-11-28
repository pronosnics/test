<?php
/**
 * Plugin Name: PDB Hub Media
 * Description: Trasferimento MCP a blocchi delle copertine degli otto percorsi dell'Atlante, separato dalle monografie.
 * Version: 0.1.2
 * Requires PHP: 7.4
 */
if (!defined('ABSPATH')) exit;
final class PDB_Hub_Media {
    const MAX = 8388608;
    const CHUNK = 49152;
    const TTL = 3600;
    const IDS = [778,8770,8771,8772,8773,8774,8775,8776];
    static function err($msg) { return new WP_Error('pdbhub_media', $msg); }
    static function allowed($id) {
        return in_array((int)$id,self::IDS,true) && get_post_type($id)==='page' && in_array(get_post_status($id),['draft','publish','pending','private'],true) && current_user_can('edit_post',$id);
    }
    static function permission($input=null) {
        return is_user_logged_in() && current_user_can('manage_options') && current_user_can('upload_files');
    }
    // Non-autoloaded private DB options; no public REST exposure or filesystem staging.
    static function key($t) { return 'pdbhm12_'.$t; }
    static function lock($t,$fn) {
        global $wpdb;
        $name='pdbhm_'.substr(hash('sha256',ABSPATH.'|'.$t),0,48);
        if ((string)$wpdb->get_var($wpdb->prepare('SELECT GET_LOCK(%s, 2)',$name))!=='1') return self::err('Lock database non disponibile.');
        try { return $fn(); } finally { $wpdb->get_var($wpdb->prepare('SELECT RELEASE_LOCK(%s)',$name)); }
    }
    static function clean($key,$m) {
        // Include possible pending chunk after a failed manifest write.
        foreach(array_unique(array_merge($m['offsets']??[],[(int)($m['offset']??0)])) as $i) delete_option($key.'_c_'.(int)$i);
        delete_option($key);
        return get_option($key,false)===false;
    }
    static function sweep() {
        global $wpdb;
        $like=$wpdb->esc_like('pdbhm12_').'%';
        $keys=$wpdb->get_col($wpdb->prepare("SELECT option_name FROM {$wpdb->options} WHERE option_name LIKE %s AND CHAR_LENGTH(option_name)=40 LIMIT 100",$like));
        foreach($keys?:[] as $key) {
            $m=get_option($key,false);
            if(!is_array($m)||($m['expires']??0)>=time()) continue;
            $t=substr($key,8);
            if(!preg_match('/^[a-f0-9]{32}$/D',$t)) continue;
            self::lock($t,function() use($key) { $m=get_option($key,false); if(is_array($m)&&($m['expires']??0)<time()) self::clean($key,$m); });
        }
    }
    static function start($a) {
        if (!self::permission() || !self::allowed($a['post_id']??0)) return self::err('Pagina hub non autorizzata.');
        $id=(int)$a['post_id']; $size=(int)($a['file_size']??0); $hash=strtolower($a['sha256']??''); $name=$a['filename']??'';
        if ($size<1 || $size>self::MAX || !preg_match('/^[a-f0-9]{64}$/D',$hash) || !preg_match('/^[a-z0-9][a-z0-9_-]{1,140}\.(webp|png|jpg|jpeg)$/D',$name)) return self::err('Manifesto non valido.');
        self::sweep();
        $token=bin2hex(random_bytes(16)); $key=self::key($token);
        $m=['owner'=>get_current_user_id(),'post_id'=>$id,'filename'=>$name,'size'=>$size,'sha256'=>$hash,'offset'=>0,'offsets'=>[],'expires'=>time()+self::TTL,'expected_featured_id'=>(int)get_post_thumbnail_id($id),'alt_text'=>sanitize_text_field($a['alt_text']??''),'caption'=>sanitize_textarea_field($a['caption']??'')];
        if(!add_option($key,$m,'',false)) return self::err('Sessione database non creata.');
        return ['upload_id'=>$token,'next_offset'=>0,'remaining_bytes'=>$size,'max_chunk_bytes'=>self::CHUNK,'expected_featured_id'=>$m['expected_featured_id'],'storage'=>'database'];
    }
    static function session($a,$fn) {
        if(!self::permission()) return self::err('Permesso negato.');
        $t=$a['upload_id']??''; if(!preg_match('/^[a-f0-9]{32}$/D',$t)) return self::err('Sessione non valida.');
        $key=self::key($t);
        return self::lock($t,function() use($key,$fn) {
            $m=get_option($key,false);
            if(!is_array($m)||($m['owner']??0)!==get_current_user_id()||($m['expires']??0)<time()||!self::allowed($m['post_id']??0)) return self::err('Sessione scaduta o non autorizzata.');
            return $fn($m,$key);
        });
    }
    static function chunk($a) {
        return self::session($a,function($m,$key) use($a) {
            $encoded=$a['base64_chunk']??''; $raw=base64_decode($encoded,true); $offset=(int)($a['offset']??-1);
            if($raw===false||strlen($raw)<1||strlen($raw)>self::CHUNK||base64_encode($raw)!==$encoded) return self::err('Blocco base64 non valido.');
            $actual=$m['offset'];
            if($offset<0||$offset>$actual||$offset+strlen($raw)>$m['size']) return self::err('Offset o dimensione non validi.');
            $ck=$key.'_c_'.$offset; $stored=get_option($ck,false);
            if($offset<$actual) {
                if(!in_array($offset,$m['offsets'],true)||$stored!==$encoded) return self::err('Ritrasmissione discordante.');
            } else {
                if(count($m['offsets'])>=1024) return self::err('Troppi blocchi.');
                if($stored===false) { if(!add_option($ck,$encoded,'',false)) return self::err('Blocco database non salvato.'); }
                elseif($stored!==$encoded) return self::err('Blocco pendente discordante.');
                $m['offsets'][]=$offset; $m['offset']+=strlen($raw);
                if(!update_option($key,$m,false)) return self::err('Manifesto non aggiornato: ripetere lo stesso blocco.');
                $actual=$m['offset'];
            }
            return ['next_offset'=>$actual,'remaining_bytes'=>$m['size']-$actual];
        });
    }
    static function abort($a) { return self::session($a,function($m,$key) { return ['aborted'=>self::clean($key,$m)]; }); }
    static function finish($a) {
        return self::session($a,function($m,$key) use($a) {
            $id=$m['post_id'];
            if($m['offset']!==$m['size']) return self::err('Dimensione incompleta.');
            $old=(int)get_post_thumbnail_id($id);
            if($old!==$m['expected_featured_id']||($old>0&&empty($a['replace_featured']))) return self::err('Immagine in evidenza cambiata o sostituzione non autorizzata.');
            $bytes='';
            foreach($m['offsets'] as $i) {
                $encoded=get_option($key.'_c_'.$i,false);
                if(!is_string($encoded)||strlen($bytes)!==$i) return self::err('Sequenza database non coerente.');
                $raw=base64_decode($encoded,true); if($raw===false||strlen($bytes)+strlen($raw)>self::MAX) return self::err('Blocco database non valido.');
                $bytes.=$raw;
            }
            if(strlen($bytes)!==$m['size']||!hash_equals($m['sha256'],hash('sha256',$bytes))) return self::err('Dimensione o SHA-256 non corrispondenti.');
            $ext=pathinfo($m['filename'],PATHINFO_EXTENSION); $mime=['webp'=>'image/webp','png'=>'image/png','jpg'=>'image/jpeg','jpeg'=>'image/jpeg'][$ext]??'';
            $dim=@getimagesizefromstring($bytes);
            if(!$dim||($dim['mime']??'')!==$mime||$dim[0]<300||$dim[1]<300||$dim[0]>4096||$dim[1]>4096||$dim[0]*$dim[1]>12000000) return self::err('Formato o dimensioni immagine non ammessi.');
            require_once ABSPATH.'wp-admin/includes/file.php'; require_once ABSPATH.'wp-admin/includes/media.php'; require_once ABSPATH.'wp-admin/includes/image.php';
            // Standard WordPress temporary file only during final import, never between requests.
            $tmp=wp_tempnam($m['filename']);
            if(!$tmp||is_link($tmp)||file_put_contents($tmp,$bytes,LOCK_EX)!==strlen($bytes)) { if($tmp) @unlink($tmp); return self::err('File temporaneo WordPress non disponibile.'); }
            unset($bytes);
            try {
                $check=wp_check_filetype_and_ext($tmp,$m['filename']); if(($check['type']??'')!==$mime) return self::err('MIME WordPress non ammesso.');
                if(!hash_equals($m['sha256'],hash_file('sha256',$tmp))) return self::err('SHA-256 temporaneo non corrispondente.');
                // Consume before import to prevent duplicate imports after a retry.
                if(!self::clean($key,$m)) return self::err('Sessione non consumata.');
                $media=media_handle_sideload(['name'=>$m['filename'],'tmp_name'=>$tmp],$id,null,['post_excerpt'=>$m['caption']]);
                if(is_wp_error($media)) return $media;
                $media=(int)$media; update_post_meta($media,'_wp_attachment_image_alt',$m['alt_text']);
                $original=function_exists('wp_get_original_image_path')?wp_get_original_image_path($media):get_attached_file($media);
                $server_hash=$original&&is_file($original)?hash_file('sha256',$original):'';
                $out=['attachment_id'=>$media,'post_id'=>$id,'sha256'=>$server_hash,'width'=>$dim[0],'height'=>$dim[1],'url'=>wp_get_attachment_url($media),'featured_image_id'=>(int)get_post_thumbnail_id($id),'alt_text'=>get_post_meta($media,'_wp_attachment_image_alt',true),'caption'=>wp_get_attachment_caption($media),'status'=>'imported_not_assigned'];
                if(!hash_equals($m['sha256'],$server_hash)) { $out['reason']='SHA-256 originale WordPress non corrispondente; allegato non associato.'; return $out; }
                if((int)get_post_thumbnail_id($id)!==$old||!self::allowed($id)) { $out['reason']='Destinazione cambiata; allegato non associato.'; return $out; }
                set_post_thumbnail($id,$media); $out['featured_image_id']=(int)get_post_thumbnail_id($id);
                if($out['featured_image_id']===$media) $out['status']='assigned';
                return $out;
            } finally { if(is_file($tmp)) @unlink($tmp); }
        });
    }
    static function register() {
        if(!function_exists('wp_register_ability')) return;
        $token=['type'=>'string','pattern'=>'^[a-f0-9]{32}$'];
        $defs=[
            'start'=>[['post_id'=>['type'=>'integer','minimum'=>1],'filename'=>['type'=>'string','maxLength'=>145],'file_size'=>['type'=>'integer','minimum'=>1,'maximum'=>self::MAX],'sha256'=>['type'=>'string','pattern'=>'^[a-fA-F0-9]{64}$'],'alt_text'=>['type'=>'string','maxLength'=>350],'caption'=>['type'=>'string','maxLength'=>400]],['post_id','filename','file_size','sha256']],
            'chunk'=>[['upload_id'=>$token,'offset'=>['type'=>'integer','minimum'=>0],'base64_chunk'=>['type'=>'string','minLength'=>4,'maxLength'=>65536]],['upload_id','offset','base64_chunk']],
            'finish'=>[['upload_id'=>$token,'replace_featured'=>['type'=>'boolean']],['upload_id']],
            'abort'=>[['upload_id'=>$token],['upload_id']]
        ];
        foreach($defs as $op=>$d) wp_register_ability('pdbhub/media-'.$op,['label'=>'PDB Hub Media '.$op,'description'=>'Trasferimento autenticato copertine hub: '.$op.'. Solo otto pagine autorizzate; nessuna modifica alle monografie.','category'=>'site','input_schema'=>['type'=>'object','properties'=>$d[0],'required'=>$d[1],'additionalProperties'=>false],'output_schema'=>['type'=>'object','additionalProperties'=>true],'permission_callback'=>[self::class,'permission'],'execute_callback'=>[self::class,$op],'meta'=>['public'=>true,'show_in_rest'=>false,'mcp'=>['public'=>true],'annotations'=>['readonly'=>false,'destructive'=>false,'idempotent'=>$op==='chunk']]]);
    }
}
add_action('wp_abilities_api_init',[PDB_Hub_Media::class,'register']);

add_action('pdbhm12_cleanup',[PDB_Hub_Media::class,'sweep']);
register_activation_hook(__FILE__,function(){ if(!wp_next_scheduled('pdbhm12_cleanup')) wp_schedule_event(time()+300,'hourly','pdbhm12_cleanup'); });
register_deactivation_hook(__FILE__,function(){ wp_clear_scheduled_hook('pdbhm12_cleanup'); });
