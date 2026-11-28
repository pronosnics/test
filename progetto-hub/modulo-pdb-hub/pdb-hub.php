<?php
/**
 * Plugin Name: PDB Atlante — Percorsi tematici
 * Description: Indice e collegamenti editoriali espliciti, senza modifiche alle relazioni scientifiche.
 * Version: 0.2.0
 * Requires PHP: 7.4
 */
if (!defined('ABSPATH')) exit;
function pdbhub_member_types() { return array('pdb_plant','pdb_quote','pdb_term','pdb_medicine'); }
function pdbhub_slug_key($slug) { return strtolower(rawurlencode(rawurldecode((string)$slug))); }
function pdbhub_manifest() {
    static $manifest=null;
    if($manifest!==null) return $manifest;
    $raw=file_get_contents(__DIR__.'/hub-manifest.json');
    $parsed=$raw!==false?json_decode($raw,true):null;
    $manifest=is_array($parsed)&&isset($parsed['version'],$parsed['hubs'])&&$parsed['version']===1&&is_array($parsed['hubs'])?$parsed:array('hubs'=>array());
    return $manifest;
}
function pdbhub_page_visible($hub) {
    $id=(int)$hub['id'];
    $p=get_post($id);
    return $p && $p->post_type==='page' && $p->post_status==='publish' && $p->post_password==='' && pdbhub_slug_key($p->post_name)===pdbhub_slug_key($hub['slug']);
}
function pdbhub_public_rows() {
    return array_values(array_filter(pdbhub_manifest()['hubs'],'pdbhub_page_visible'));
}
function pdbhub_member_key($type,$slug) { return $type.':'.pdbhub_slug_key($slug); }
function pdbhub_resolve_member($member) {
    static $cache=array();
    if(!in_array($member['type'],pdbhub_member_types(),true)) return 0;
    $key=pdbhub_member_key($member['type'],$member['slug']);
    if(array_key_exists($key,$cache)) return $cache[$key];
    $p=get_page_by_path($member['slug'],OBJECT,array($member['type']));
    $cache[$key]=$p && $p->post_type===$member['type'] && $p->post_status==='publish' && $p->post_password==='' && pdbhub_slug_key($p->post_name)===pdbhub_slug_key($member['slug'])?(int)$p->ID:0;
    return $cache[$key];
}
function pdbhub_related_rows($id) {
    $p=get_post($id);
    if(!$p||$p->post_status!=='publish'||$p->post_password!==''||!in_array($p->post_type,pdbhub_member_types(),true)) return array();
    $key=pdbhub_member_key($p->post_type,$p->post_name);
    $out=array();
    foreach(pdbhub_public_rows() as $hub){
        foreach($hub['members'] as $member){
            if($key!==pdbhub_member_key($member['type'],$member['slug'])) continue;
            if(pdbhub_resolve_member($member)===(int)$id) $out[]=$hub;
            break;
        }
    }
    return $out;
}
function pdbhub_render_related($id) {
    $links='';
    foreach(pdbhub_related_rows($id) as $hub) $links.='<li><a href="'.esc_url(get_permalink($hub['id'])).'">'.esc_html($hub['title']).'</a></li>';
    return $links===''?'':'<section class="pdbhub-related" aria-label="Percorsi tematici correlati"><h2>Percorsi tematici correlati</h2><p>Approfondimenti editoriali: non costituiscono identificazioni botaniche certe.</p><ul>'.$links.'</ul></section>';
}
function pdbhub_render_index() {
    $out='';
    foreach(pdbhub_public_rows() as $hub){
        $id=(int)$hub['id']; $cover=has_post_thumbnail($id)?$id:(int)($hub['cover_id']??0);
        $out.='<article class="pdbhub-card">';
        if($cover && get_post_status($cover)==='publish' && has_post_thumbnail($cover)) $out.=get_the_post_thumbnail($cover,'medium',array('alt'=>'','loading'=>'lazy','decoding'=>'async'));
        $out.='<h3><a href="'.esc_url(get_permalink($id)).'">'.esc_html($hub['title']).'</a></h3><p>'.esc_html($hub['description']).'</p></article>';
    }
    return $out===''?'':'<div class="pdbhub-grid">'.$out.'</div>';
}
add_shortcode('pdb_hub_index','pdbhub_render_index');
add_shortcode('pdb_hub_related',static function(){ return pdbhub_render_related(get_the_ID()); });
add_shortcode('pdb_hub_cards',static function(){
    $id=get_the_ID(); $out='';
    foreach(pdbhub_public_rows() as $hub){
        if((int)$hub['id']!==(int)$id) continue;
        foreach($hub['members'] as $member){
            $target=pdbhub_resolve_member($member); if(!$target) continue;
            $out.='<li><a href="'.esc_url(get_permalink($target)).'">'.esc_html(get_the_title($target)).'</a></li>';
        }
        break;
    }
    return $out===''?'':'<ul class="pdbhub-member-list">'.$out.'</ul>';
});
add_action('wp_enqueue_scripts',static function(){
    if(is_singular(array_merge(array('page'),pdbhub_member_types()))) wp_enqueue_style('pdbhub-core',plugins_url('hub.css',__FILE__),array(),'0.2.0');
});
add_action('admin_menu',static function(){
    add_management_page('Diagnostica percorsi Atlante','Percorsi Atlante','manage_options','pdbhub-diagnostic','pdbhub_diagnostic');
});
function pdbhub_diagnostic(){
    if(!current_user_can('manage_options')) return;
    echo '<div class="wrap"><h1>Diagnostica percorsi Atlante</h1><p>Controllo in sola lettura. Non modifica schede, metadati o relazioni scientifiche.</p>';
    foreach(pdbhub_manifest()['hubs'] as $hub){
        $id=(int)$hub['id'];$page=get_post($id);$valid=$page&&$page->post_type==='page'&&pdbhub_slug_key($page->post_name)===pdbhub_slug_key($hub['slug']);
        echo '<h2>'.esc_html($hub['title']).' (#'.esc_html((string)$id).')</h2><p>Pagina: '.esc_html($valid?$page->post_status:'ID/slug non corrispondenti').'</p>';
        $missing=array();$ok=0;
        foreach($hub['members'] as $member){if(pdbhub_resolve_member($member)) $ok++; else $missing[]=$member['type'].' / '.$member['slug'];}
        echo '<p>'.esc_html((string)$ok).' / '.esc_html((string)count($hub['members'])).' destinazioni pubbliche risolte.</p>';
        if($missing){echo '<ul>';foreach($missing as $item) echo '<li>'.esc_html($item).'</li>';echo '</ul>';}
    }
    echo '</div>';
}
