<?php
/**
 * Plugin Name: PDB Hub Media
 * Description: Trasferimento MCP a blocchi delle copertine degli otto percorsi dell'Atlante, separato dalle monografie.
 * Version: 0.1.0
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
    static function root() {
        // Never place upload fragments in public wp-content/uploads.
        $root = rtrim(sys_get_temp_dir(),'/\\').'/pdbhub-media-'.substr(hash_hmac('sha256',ABSPATH,wp_salt('auth')),0,32);
        if (!is_dir($root) && !@mkdir($root,0700) && !is_dir($root)) return self::err('Directory temporanea privata indisponibile.');
        if (is_link($root) || !is_dir($root) || !is_writable($root)) return self::err('Directory temporanea non sicura.');
        @chmod($root,0700);
        $real=realpath($root);
        foreach ([ABSPATH,$_SERVER['DOCUMENT_ROOT']??''] as $public) {
            $web=$public!==''?realpath($public):false;
            if ($web && $real && ($real===$web || strpos($real,rtrim($web,DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR)===0)) return self::err('Directory temporanea dentro il percorso pubblico.');
        }
        if ((fileperms($root)&0077)!==0) return self::err('Permessi directory temporanea non privati.');
        return $root;
    }
    static function sweep($root) {
        foreach (glob($root.'/*.json') ?: [] as $p) {
            if (is_link($p) || @filemtime($p)>time()-self::TTL) continue;
            $h=@fopen($p,'r+'); if (!$h) continue;
            if (flock($h,LOCK_EX|LOCK_NB)) {
                $m=json_decode(stream_get_contents($h),true);
                if (!is_array($m) || ($m['expires']??0)<time()) { @unlink(substr($p,0,-5).'.bin'); @unlink($p); }
                flock($h,LOCK_UN);
            } fclose($h);
        }
    }
    static function start($a) {
        if (!self::permission() || !self::allowed($a['post_id']??0)) return self::err('Pagina hub non autorizzata.');
        $id=(int)$a['post_id']; $size=(int)($a['file_size']??0); $hash=strtolower($a['sha256']??''); $name=$a['filename']??'';
        if ($size<1 || $size>self::MAX || !preg_match('/^[a-f0-9]{64}$/D',$hash) || !preg_match('/^[a-z0-9][a-z0-9_-]{1,140}\.(webp|png|jpg|jpeg)$/D',$name)) return self::err('Manifesto non valido.');
        $root=self::root(); if(is_wp_error($root)) return $root; self::sweep($root);
        $token=bin2hex(random_bytes(16)); $base=$root.'/'.$token;
        $m=['owner'=>get_current_user_id(),'post_id'=>$id,'filename'=>$name,'size'=>$size,'sha256'=>$hash,'offset'=>0,'expires'=>time()+self::TTL,'expected_featured_id'=>(int)get_post_thumbnail_id($id),'alt_text'=>sanitize_text_field($a['alt_text']??''),'caption'=>sanitize_textarea_field($a['caption']??'')];
        $h=@fopen($base.'.json','x'); if(!$h) return self::err('Sessione non creata.');
        @chmod($base.'.json',0600); $b=@fopen($base.'.bin','x');
        if(!$b) { fclose($h); @unlink($base.'.json'); return self::err('File temporaneo non creato.'); }
        @chmod($base.'.bin',0600); fclose($b);
        $j=wp_json_encode($m); $ok=is_string($j)&&fwrite($h,$j)===strlen($j); fclose($h);
        if(!$ok) { @unlink($base.'.json'); @unlink($base.'.bin'); return self::err('Manifesto non salvato.'); }
        return ['upload_id'=>$token,'next_offset'=>0,'remaining_bytes'=>$size,'max_chunk_bytes'=>self::CHUNK,'expected_featured_id'=>$m['expected_featured_id']];
    }
    static function session($a,$fn) {
        if (!self::permission()) return self::err('Permesso negato.');
        $t=$a['upload_id']??''; if(!preg_match('/^[a-f0-9]{32}$/D',$t)) return self::err('Sessione non valida.');
        $root=self::root(); if(is_wp_error($root)) return $root; $base=$root.'/'.$t;
        if(is_link($base.'.json')||is_link($base.'.bin')) return self::err('Sessione non sicura.');
        $h=@fopen($base.'.json','r+'); if(!$h) return self::err('Sessione assente.');
        if(!flock($h,LOCK_EX)) { fclose($h); return self::err('Lock non acquisito.'); }
        try {
            clearstatcache(true,$base.'.json');
            $m=json_decode(stream_get_contents($h),true);
            if(!is_file($base.'.json') || !is_array($m) || ($m['owner']??0)!==get_current_user_id() || ($m['expires']??0)<time() || !self::allowed($m['post_id']??0)) return self::err('Sessione scaduta o non autorizzata.');
            return $fn($m,$base,$h);
        } finally { flock($h,LOCK_UN); fclose($h); }
    }
    static function chunk($a) {
        return self::session($a,function($m,$base,$h) use($a) {
            $raw=base64_decode($a['base64_chunk']??'',true); $offset=(int)($a['offset']??-1);
            if($raw===false || strlen($raw)<1 || strlen($raw)>self::CHUNK || base64_encode($raw)!==($a['base64_chunk']??'')) return self::err('Blocco base64 non valido.');
            clearstatcache(true,$base.'.bin'); $actual=@filesize($base.'.bin');
            if($actual===false || $actual>$m['size']) return self::err('File temporaneo non coerente.');
            // File length is authoritative; exact retransmissions are safe.
            if($offset<0 || $offset>$actual || $offset+strlen($raw)>$m['size']) return self::err('Offset o dimensione non validi.');
            $b=@fopen($base.'.bin','r+b'); if(!$b) return self::err('File temporaneo non leggibile.');
            if($offset<$actual) {
                $ok=$offset+strlen($raw)<=$actual && fseek($b,$offset)===0 && fread($b,strlen($raw))===$raw;
                fclose($b); if(!$ok) return self::err('Ritrasmissione discordante.');
            } else {
                $ok=fseek($b,$actual)===0 && fwrite($b,$raw)===strlen($raw) && fflush($b);
                if(!$ok) { ftruncate($b,$actual); fclose($b); return self::err('Scrittura blocco incompleta.'); }
                fclose($b); $actual+=strlen($raw);
            }
            return ['next_offset'=>$actual,'remaining_bytes'=>$m['size']-$actual];
        });
    }
    static function abort($a) {
        return self::session($a,function($m,$base,$h) { @unlink($base.'.bin'); @unlink($base.'.json'); return ['aborted'=>!file_exists($base.'.bin')&&!file_exists($base.'.json')]; });
    }
    static function finish($a) {
        return self::session($a,function($m,$base,$h) use($a) {
            $id=$m['post_id']; $file=$base.'.bin'; clearstatcache(true,$file);
            if(!is_file($file)||filesize($file)!==$m['size']||!hash_equals($m['sha256'],hash_file('sha256',$file))) return self::err('Dimensione o SHA-256 non corrispondenti.');
            $old=(int)get_post_thumbnail_id($id);
            if($old!==$m['expected_featured_id'] || ($old>0 && empty($a['replace_featured']))) return self::err('Immagine in evidenza cambiata o sostituzione non autorizzata.');
            $ext=pathinfo($m['filename'],PATHINFO_EXTENSION); $mime=['webp'=>'image/webp','png'=>'image/png','jpg'=>'image/jpeg','jpeg'=>'image/jpeg'][$ext]??'';
            $dim=@getimagesize($file);
            if(!$dim || ($dim['mime']??'')!==$mime || $dim[0]<300 || $dim[1]<300 || $dim[0]>4096 || $dim[1]>4096 || $dim[0]*$dim[1]>12000000) return self::err('Formato o dimensioni immagine non ammessi.');
            require_once ABSPATH.'wp-admin/includes/file.php'; require_once ABSPATH.'wp-admin/includes/media.php'; require_once ABSPATH.'wp-admin/includes/image.php';
            $check=wp_check_filetype_and_ext($file,$m['filename']); if(($check['type']??'')!==$mime) return self::err('MIME WordPress non ammesso.');
            $tmp=wp_tempnam($m['filename']); if(!$tmp || !copy($file,$tmp)) { if($tmp) @unlink($tmp); return self::err('Copia temporanea non disponibile.'); }
            // Consume session before import to prevent duplicate imports after a retry.
            if(!@unlink($base.'.json')) { @unlink($tmp); return self::err('Sessione non consumata.'); }
            @unlink($file);
            $media=media_handle_sideload(['name'=>$m['filename'],'tmp_name'=>$tmp],$id,null,['post_excerpt'=>$m['caption']]);
            if(is_wp_error($media)) { @unlink($tmp); return $media; }
            $media=(int)$media; update_post_meta($media,'_wp_attachment_image_alt',$m['alt_text']);
            $original=function_exists('wp_get_original_image_path')?wp_get_original_image_path($media):get_attached_file($media);
            $server_hash=$original && is_file($original)?hash_file('sha256',$original):'';
            $out=['attachment_id'=>$media,'post_id'=>$id,'sha256'=>$server_hash,'width'=>$dim[0],'height'=>$dim[1],'url'=>wp_get_attachment_url($media),'featured_image_id'=>(int)get_post_thumbnail_id($id),'alt_text'=>get_post_meta($media,'_wp_attachment_image_alt',true),'caption'=>wp_get_attachment_caption($media),'status'=>'imported_not_assigned'];
            if(!hash_equals($m['sha256'],$server_hash)) { $out['reason']='SHA-256 originale WordPress non corrispondente; allegato non associato.'; return $out; }
            if((int)get_post_thumbnail_id($id)!==$old || !self::allowed($id)) { $out['reason']='Destinazione cambiata; allegato non associato.'; return $out; }
            set_post_thumbnail($id,$media); $out['featured_image_id']=(int)get_post_thumbnail_id($id);
            if($out['featured_image_id']===$media) $out['status']='assigned';
            return $out;
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
