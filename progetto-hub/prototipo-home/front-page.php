<?php
if (!defined('ABSPATH')) exit;
wp_enqueue_style('pdb-home-editorial',get_theme_file_uri('/assets/home-atlas.css'),array('erbario-biblico'),'1.1.0-draft5');
get_header();
$opts=pdb_theme_settings();
$atlas=get_post_status(131)==='publish' ? get_permalink(131) : pdb_theme_archive_url();
$method=get_post_status(2035)==='publish' ? get_permalink(2035) : '';
$index=get_post_status(8767)==='publish' && !post_password_required(8767) ? get_permalink(8767) : '';
$hub_rows=array(
array('id'=>778,'title'=>'Sette specie della Terra Promessa','description'=>'Le colture di Deuteronomio 8 e la tradizione delle sette specie.','cover_id'=>129),
array('id'=>8770,'title'=>'Le quattro specie di Sukkot','description'=>'Le piante della festa delle Capanne fra testo e tradizione rituale.','cover_id'=>1271),
array('id'=>8771,'title'=>'Cereali e legumi','description'=>'Colture, alimentazione e lessico dei frumenti e dei legumi.','cover_id'=>1834),
array('id'=>8772,'title'=>'Spezie, aromi e resine','description'=>'Profumi, merci, culto e identificazioni botaniche.','cover_id'=>1432),
array('id'=>8773,'title'=>'Alberi da frutto','description'=>'Frutteti, colture e interpretazioni dei nomi antichi.','cover_id'=>212),
array('id'=>8774,'title'=>'Identificazioni controverse','description'=>'Come valutare le ipotesi e le incertezze.','cover_id'=>0),
array('id'=>8775,'title'=>'Nomi e lingue antiche','description'=>'Forme originali, traslitterazioni e significati.','cover_id'=>0),
array('id'=>8776,'title'=>'Medicina storica','description'=>'Testimonianze, evidenze e sicurezza.','cover_id'=>0)
);
if(function_exists('pdbhub_manifest')) { $registry=pdbhub_manifest(); if(!empty($registry['hubs'])) $hub_rows=$registry['hubs']; }
$family_tax=get_taxonomy('pdb_family');
$family_terms=($family_tax && is_taxonomy_viewable($family_tax)) ? get_terms(array('taxonomy'=>'pdb_family','hide_empty'=>true,'orderby'=>'name','order'=>'ASC')) : array();
if(is_wp_error($family_terms)) $family_terms=array();
$icons=array('pdb_plant'=>'M12 21V10m0 5C3 15 3 6 3 6s9 0 9 9m0-4C12 3 21 3 21 3s0 8-9 8','pdb_quote'=>'M3 5h6a3 3 0 0 1 3 3v13a4 4 0 0 0-4-3H3z M21 5h-6a3 3 0 0 0-3 3v13a4 4 0 0 1 4-3h5z','pdb_term'=>'M3 5h12M9 3v2m4 0c-1 6-5 10-10 12m3-8c2 4 5 6 9 8m1 4 4-10 4 10m-7-3h6','pdb_medicine'=>'M9 3h6m-5 0v7l-6 9a1 1 0 0 0 1 2h14a1 1 0 0 0 1-2l-6-9V3M7 16h10','pdb_source'=>'M3 4h4v16H3z M10 4h4v16h-4z M17 5l4-1 3 15-4 1z','paths'=>'M3 5h6v5H3z M15 14h6v5h-6z M6 10v6h9 M12 5h6v9');
$areas=array(
'pdb_plant'=>array('Atlante botanico','Specie, nomi scientifici e caratteristiche botaniche.'),
'pdb_quote'=>array('Bibbia','Passi, versetti e interpretazioni botaniche.'),
'pdb_term'=>array('Lingue antiche','Nomi originali, traslitterazioni e identificazioni.'),
'pdb_medicine'=>array('Medicina storica','Usi documentati, limiti delle prove e sicurezza.'),
'pdb_source'=>array('Bibliografia','Opere storiche, ricerche moderne e fonti.'));
?>
<div class="pdbh">
<section class="pdbh-hero"><div class="pdbh-wrap pdbh-hero-grid"><div>
<p class="pdbh-kicker">Botanica · Filologia · Storia</p>
<h1><?php echo esc_html($opts['hero_title']); ?></h1>
<p class="pdbh-lead">Un atlante digitale per conoscere le piante della Bibbia: dalle specie del paesaggio mediterraneo e del Vicino Oriente ai nomi delle lingue antiche, dalle testimonianze storiche alle identificazioni botaniche moderne. Le schede distinguono dati, tradizioni e ipotesi e rinviano alle rispettive fonti.</p>
<form class="pdbh-form" role="search" aria-label="Ricerca nell’Atlante" method="get" action="<?php echo esc_url($atlas); ?>">
<label for="pdbh-q">Cerca nell’Atlante</label><input id="pdbh-q" type="search" name="atlas_q" placeholder="Olivo, Genesi, Olea europaea…" required><button class="pdbh-btn" type="submit">Cerca</button>
<input type="hidden" name="atlas_area" value="all"></form>
<div class="pdbh-links"><a class="pdbh-btn" href="<?php echo esc_url($atlas); ?>">Esplora l’Atlante</a><a href="#percorsi">Percorsi tematici</a><?php if($method): ?><a href="<?php echo esc_url($method); ?>">Il metodo scientifico</a><?php endif; ?></div>
</div><div class="pdbh-plates" aria-label="Tavole botaniche dell’Atlante">
<?php foreach(array(129=>'Olivo',143=>'Vite',152=>'Fico') as $id=>$name): if(get_post_status($id)!=='publish'||!has_post_thumbnail($id)) continue; ?>
<a href="<?php echo esc_url(get_permalink($id)); ?>"><?php echo get_the_post_thumbnail($id,'medium_large',array('alt'=>'','decoding'=>'async','sizes'=>'(max-width: 480px) 28vw, (max-width: 850px) 28vw, 18vw')); ?><span><?php echo esc_html($name); ?></span></a>
<?php endforeach; ?>
</div></div></section>
<section class="pdbh-stats" aria-label="L’Atlante in numeri"><div class="pdbh-wrap"><dl>
<?php foreach(array('pdb_plant'=>'Schede botaniche','pdb_quote'=>'Citazioni bibliche','pdb_term'=>'Nomi antichi','pdb_medicine'=>'Schede medicinali','pdb_source'=>'Fonti bibliografiche') as $type=>$label): if(!post_type_exists($type)) continue; $counts=wp_count_posts($type); ?>
<div><dt><?php echo esc_html($label); ?></dt><dd><a aria-label="<?php echo esc_attr($label); ?>" href="<?php echo esc_url(add_query_arg('atlas_area',$type,$atlas)); ?>"><?php echo esc_html(number_format_i18n((int)($counts->publish??0))); ?> <span aria-hidden="true">↗</span></a></dd></div>
<?php endforeach; if(taxonomy_exists('pdb_family')): $families=wp_count_terms(array('taxonomy'=>'pdb_family','hide_empty'=>true)); if(!is_wp_error($families)): ?>
<div><dt>Famiglie con schede</dt><dd><a href="<?php echo esc_url($family_terms ? home_url('/#famiglie') : (get_post_type_archive_link('pdb_plant')?:$atlas)); ?>" aria-label="Famiglie con schede: consulta il catalogo"><?php echo esc_html(number_format_i18n((int)$families)); ?> <span aria-hidden="true">↗</span></a></dd></div>
<?php endif; endif; ?></dl></div></section>
<section class="pdbh-section" id="catalogo"><div class="pdbh-wrap"><p class="pdbh-kicker">Consulta il patrimonio scientifico</p><h2>Esplora l’Atlante</h2><div class="pdbh-grid">
<?php foreach($areas as $type=>$area): if(!post_type_exists($type)) continue; ?>
<a class="pdbh-entry" href="<?php echo esc_url(add_query_arg('atlas_area',$type,$atlas)); ?>"><svg class="pdbh-icon" viewBox="0 0 25 25" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="<?php echo esc_attr($icons[$type]); ?>"/></svg><strong><?php echo esc_html($area[0]); ?></strong><span><?php echo esc_html($area[1]); ?></span><span aria-hidden="true">Esplora →</span></a>
<?php endforeach; ?><a class="pdbh-entry" href="#percorsi"><svg class="pdbh-icon" viewBox="0 0 25 25" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="<?php echo esc_attr($icons['paths']); ?>"/></svg><strong>Percorsi tematici</strong><span>Approfondimenti botanici, storici e culturali.</span><span aria-hidden="true">Esplora →</span></a></div></div></section>
<section class="pdbh-section" id="percorsi"><div class="pdbh-wrap"><p class="pdbh-kicker">Leggere la Bibbia attraverso le piante</p><h2>Percorsi e approfondimenti</h2><p class="pdbh-section-intro">Esplora i temi attraverso le monografie, i testi antichi e le fonti. Le associazioni editoriali non equivalgono a identificazioni botaniche certe.</p><div class="pdbh-featured pdbh-hub-cards">
<?php foreach($hub_rows as $hub): $id=(int)$hub['id']; if(get_post_type($id)!=='page'||get_post_status($id)!=='publish'||post_password_required($id)) continue; $cover=has_post_thumbnail($id)?$id:(int)($hub['cover_id']??0); ?>
<a class="pdbh-entry" href="<?php echo esc_url(get_permalink($id)); ?>"><?php if($cover && get_post_status($cover)==='publish' && has_post_thumbnail($cover)) echo get_the_post_thumbnail($cover,'medium',array('loading'=>'lazy','alt'=>'','sizes'=>'(max-width: 480px) 45vw, (max-width: 850px) 45vw, 23vw')); ?><h3><?php echo esc_html($hub['title']); ?></h3><span><?php echo esc_html($hub['description']); ?></span><span aria-hidden="true">Leggi il percorso →</span></a>
<?php endforeach; ?>
<?php if($method): ?><a class="pdbh-entry" href="<?php echo esc_url($method); ?>"><h3>Fonti e metodologia</h3><span>Come distinguiamo dati, tradizioni e ipotesi.</span><span aria-hidden="true">Scopri il metodo →</span></a><?php endif; ?>
</div><?php if($index): ?><p><a class="pdbh-btn" href="<?php echo esc_url($index); ?>">Tutti i percorsi tematici →</a></p><?php endif; ?></div></section>
<?php if($family_terms): ?><section class="pdbh-section" id="famiglie"><div class="pdbh-wrap"><p class="pdbh-kicker">Classificazione botanica</p><h2>Esplora per famiglia</h2><p class="pdbh-section-intro">Consulta le schede attraverso le famiglie registrate nell’Atlante.</p><div class="pdbh-grid">
<?php foreach(array_slice($family_terms,0,9) as $family): $url=get_term_link($family); if(is_wp_error($url)) continue; ?><a class="pdbh-entry" href="<?php echo esc_url($url); ?>"><strong><?php echo esc_html($family->name); ?></strong><span><?php echo esc_html(number_format_i18n((int)$family->count)); ?> schede</span></a><?php endforeach; ?></div>
<?php if(count($family_terms)>9): ?><details><summary>Tutte le famiglie botaniche (<?php echo esc_html(number_format_i18n(count($family_terms))); ?>)</summary><ul class="pdbh-family-list"><?php foreach($family_terms as $family): $url=get_term_link($family); if(is_wp_error($url)) continue; ?><li><a href="<?php echo esc_url($url); ?>"><?php echo esc_html($family->name); ?></a> (<?php echo esc_html(number_format_i18n((int)$family->count)); ?>)</li><?php endforeach; ?></ul></details><?php endif; ?></div></section><?php endif; ?>
<section class="pdbh-section" id="approfondimenti"><div class="pdbh-wrap"><p class="pdbh-kicker">Dal catalogo botanico</p><h2>Ultime schede botaniche</h2><p class="pdbh-section-intro">Le monografie più recenti del catalogo, comprese le identificazioni discusse nelle fonti.</p><div class="pdbh-featured">
<?php if(post_type_exists('pdb_plant')): $plants=new WP_Query(array('post_type'=>'pdb_plant','post_status'=>'publish','posts_per_page'=>4,'no_found_rows'=>true,'ignore_sticky_posts'=>true,'meta_query'=>array(array('key'=>'_thumbnail_id','compare'=>'EXISTS')))); while($plants->have_posts()): $plants->the_post(); ?>
<a class="pdbh-entry" href="<?php echo esc_url(get_permalink()); ?>"><?php echo get_the_post_thumbnail(get_the_ID(),'medium',array('loading'=>'lazy','alt'=>'')); ?><?php $title=html_entity_decode(get_the_title(),ENT_QUOTES,'UTF-8'); $scientific=trim(wp_strip_all_tags((string)get_post_meta(get_the_ID(),'pdb_scientific_name',true))); ?><h3><?php echo esc_html($title); ?></h3><?php if($scientific && stripos($title,$scientific)===false): ?><span class="pdbh-sci"><?php echo esc_html($scientific); ?></span><?php endif; ?><span aria-hidden="true">Consulta la scheda →</span></a>
<?php endwhile; wp_reset_postdata(); endif; ?></div><p><a href="<?php echo esc_url(add_query_arg('atlas_area','pdb_plant',$atlas)); ?>">Tutte le schede botaniche →</a></p></div></section>
<section class="pdbh-section pdbh-library" id="fonti"><div class="pdbh-wrap"><p class="pdbh-kicker">La biblioteca dell’Atlante</p><h2>Le opere di riferimento</h2><p class="pdbh-section-intro">Una ricerca che mette a confronto le opere storico-botaniche, gli studi etnobotanici e la nomenclatura contemporanea. Le schede delle fonti documentano i riferimenti e i limiti delle identificazioni.</p><div class="pdbh-books">
<?php foreach(array(
array('Moldenke e Moldenke','Plants of the Bible','1952','moldenke-plants-of-the-bible'),
array('Michael Zohary','Plants of the Bible','1982','michael-zohary-plants-of-the-bible-1982-fonte-botanica-e-identificazioni'),
array('James A. Duke','Duke’s Handbook of Medicinal Plants of the Bible','2008','duke-piante-medicinali-bibbia'),
array('Grilli Caiola, Guarrera e Travaglini','Le piante nella Bibbia','2013','grilli-caiola-guarrera-travaglini-le-piante-nella-bibbia')
) as $book): $source=get_page_by_path($book[3],OBJECT,'pdb_source'); if(!$source||$source->post_status!=='publish') continue; ?>
<a class="pdbh-book" href="<?php echo esc_url(get_permalink($source)); ?>"><span class="pdbh-book-year"><?php echo esc_html($book[2]); ?></span><strong><?php echo esc_html($book[0]); ?></strong><cite><?php echo esc_html($book[1]); ?></cite><span class="pdbh-book-link">Consulta la fonte →</span></a>
<?php endforeach; ?></div><p class="pdbh-library-more"><a href="<?php echo esc_url(add_query_arg('atlas_area','pdb_source',$atlas)); ?>">Esplora l’intera bibliografia →</a><?php if($method): ?> · <a href="<?php echo esc_url($method); ?>">Metodo e criteri di identificazione →</a><?php endif; ?></p></div></section>
<section class="pdbh-section pdbh-method" id="il-progetto"><div class="pdbh-wrap"><p class="pdbh-kicker">Il progetto</p><h2>Botanica, testi e rigore documentale</h2><p>Il nome di una pianta nelle Scritture non coincide necessariamente con una sola specie moderna. L’Atlante confronta le fonti storico-botaniche con la tassonomia contemporanea e distingue le interpretazioni filologiche dalle conoscenze botaniche. Le testimonianze medicinali sono documentate a fini storici e scientifici, non come indicazioni terapeutiche.</p><?php if($method): ?><a href="<?php echo esc_url($method); ?>">Fonti e metodologia dell’Atlante →</a><?php endif; ?></div></section>
</div>
<?php get_footer(); ?>


