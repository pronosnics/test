<?php
/**
 * Plugin Name: PDB Atlante — Percorsi tematici
 * Description: Associazioni editoriali esplicite tra pagine hub e schede dell'Atlante.
 * Version: 0.1.0
 * Requires PHP: 7.4
 */
if (!defined('ABSPATH')) exit;
function pdbhub_member_types() { return array('pdb_plant','pdb_quote','pdb_term','pdb_medicine','pdb_source'); }
function pdbhub_ids($raw) {
    $out=array();
    foreach(preg_split('/[\s,;]+/',trim((string)$raw)) as $v) {
        if(!preg_match('/^[1-9][0-9]{0,9}$/D',$v)) continue;
        $id=(int)$v;
        if(!in_array($id,$out,true)) $out[]=$id;
        if(count($out)>=100) break;
    }
    return $out;
}
function pdbhub_valid_members($ids) {
    return array_values(array_filter($ids,static function($id){
        return in_array(get_post_type($id),pdbhub_member_types(),true) && get_post_status($id)==='publish';
    }));
}
function pdbhub_is_hub($id) { return get_post_type($id)==='page' && get_post_meta($id,'_pdbhub_enabled',true)==='1'; }
add_action('add_meta_boxes_page',static function(){
    add_meta_box('pdbhub-editor','Atlante: percorso tematico',static function($post){
        wp_nonce_field('pdbhub_save','pdbhub_nonce');
        echo '<p><label><input type="checkbox" name="pdbhub_enabled" value="1" '.checked(pdbhub_is_hub($post->ID),true,false).'> Includi questa pagina nell’indice dei percorsi quando pubblicata</label></p>';
        echo '<p><label for="pdbhub_members">ID delle schede pubblicate, in ordine editoriale (massimo 100)</label></p>';
        echo '<textarea id="pdbhub_members" name="pdbhub_members" rows="4" style="width:100%">'.esc_textarea(implode(', ',get_post_meta($post->ID,'_pdbhub_member',false))).'</textarea>';
        echo '<p>Associazioni curate manualmente. Aggiungi [pdb_hub_cards] nel testo per mostrare le schede. Non costituiscono identificazioni botaniche certe.</p>';
    },'page','normal','default');
});
add_action('save_post_page',static function($id){
    if(wp_is_post_revision($id)||wp_is_post_autosave($id)||!current_user_can('edit_post',$id)) return;
    if(!isset($_POST['pdbhub_nonce'])||!is_string($_POST['pdbhub_nonce'])||!wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['pdbhub_nonce'])),'pdbhub_save')) return;
    if(!isset($_POST['pdbhub_members'])||!is_string($_POST['pdbhub_members'])) return;
    $raw=wp_unslash($_POST['pdbhub_members']);
    if(strlen($raw)>4000) return;
    $requested=pdbhub_ids($raw);
    $ids=pdbhub_valid_members($requested);
    // Reject invalid IDs without altering the existing associations.
    if($ids!==$requested) return;
    update_post_meta($id,'_pdbhub_enabled',isset($_POST['pdbhub_enabled'])&&$_POST['pdbhub_enabled']==='1'?'1':'0');
    delete_post_meta($id,'_pdbhub_member');
    foreach($ids as $member) add_post_meta($id,'_pdbhub_member',$member,false);
});
function pdbhub_render_cards($ids,$types) {
    $out='';
    foreach(array_slice(array_unique(array_map('intval',$ids)),0,100) as $id){
        if(!in_array(get_post_type($id),$types,true)||get_post_status($id)!=='publish'||post_password_required($id)) continue;
        $title=get_the_title($id); $url=get_permalink($id);
        if(!$url) continue;
        $out.='<article class="pdbhub-card">';
        if(has_post_thumbnail($id)) $out.=get_the_post_thumbnail($id,'medium',array('alt'=>'','loading'=>'lazy','decoding'=>'async'));
        $out.='<h3><a href="'.esc_url($url).'">'.esc_html($title).'</a></h3>';
        $p=get_post($id);
        if($p && $p->post_excerpt!=='') $out.='<p>'.esc_html(wp_trim_words(wp_strip_all_tags($p->post_excerpt),26)).'</p>';
        $out.='<a class="pdbhub-card-link" href="'.esc_url($url).'" aria-label="'.esc_attr('Consulta: '.$title).'">Consulta la scheda →</a></article>';
    }
    return $out===''?'':'<div class="pdbhub-grid">'.$out.'</div>';
}
add_shortcode('pdb_hub_cards',static function(){
    $id=get_the_ID(); if(!pdbhub_is_hub($id)) return '';
    return pdbhub_render_cards(get_post_meta($id,'_pdbhub_member',false),pdbhub_member_types());
});
function pdbhub_public_hubs($member=0) {
    $meta=array(array('key'=>'_pdbhub_enabled','value'=>'1'));
    if($member) $meta[]=array('key'=>'_pdbhub_member','value'=>(int)$member,'compare'=>'=','type'=>'NUMERIC');
    return get_posts(array('post_type'=>'page','post_status'=>'publish','has_password'=>false,'numberposts'=>100,'fields'=>'ids','orderby'=>array('menu_order'=>'ASC','title'=>'ASC'),'meta_query'=>$meta,'suppress_filters'=>false));
}
add_shortcode('pdb_hub_index',static function(){
    return pdbhub_render_cards(pdbhub_public_hubs(),array('page'));
});
add_shortcode('pdb_hub_related',static function(){
    $id=get_the_ID(); if(!in_array(get_post_type($id),pdbhub_member_types(),true)||get_post_status($id)!=='publish') return '';
    $links=''; foreach(pdbhub_public_hubs($id) as $hub){
        if(!pdbhub_is_hub($hub)||get_post_status($hub)!=='publish'||post_password_required($hub)) continue;
        $links.='<li><a href="'.esc_url(get_permalink($hub)).'">'.esc_html(get_the_title($hub)).'</a></li>';
    }
    return $links===''?'':'<section class="pdbhub-related"><h2>Percorsi tematici correlati</h2><ul>'.$links.'</ul></section>';
});
