<?php
if (!defined('ABSPATH')) exit;
wp_enqueue_style('pdb-home-editorial',get_theme_file_uri('/assets/home-atlas.css'),array('erbario-biblico'),'1.1.0-draft1');
get_header();
$opts=pdb_theme_settings();
$atlas=get_post_status(131)==='publish' ? get_permalink(131) : pdb_theme_archive_url();
$method=get_post_status(2035)==='publish' ? get_permalink(2035) : '';
$seven=get_post_status(778)==='publish' ? get_permalink(778) : '';
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
<a href="<?php echo esc_url(get_permalink($id)); ?>"><?php echo get_the_post_thumbnail($id,'medium_large',array('alt'=>'','decoding'=>'async')); ?><span><?php echo esc_html($name); ?></span></a>
<?php endforeach; ?>
</div></div></section>
<section class="pdbh-stats" aria-label="L’Atlante in numeri"><div class="pdbh-wrap"><dl>
<?php foreach(array('pdb_plant'=>'Schede botaniche','pdb_quote'=>'Citazioni bibliche','pdb_term'=>'Nomi antichi','pdb_medicine'=>'Schede medicinali','pdb_source'=>'Fonti bibliografiche') as $type=>$label): if(!post_type_exists($type)) continue; $counts=wp_count_posts($type); ?>
<div><dt><?php echo esc_html($label); ?></dt><dd><?php echo esc_html(number_format_i18n((int)($counts->publish??0))); ?></dd></div>
<?php endforeach; if(taxonomy_exists('pdb_family')): $families=wp_count_terms(array('taxonomy'=>'pdb_family','hide_empty'=>true)); if(!is_wp_error($families)): ?>
<div><dt>Famiglie con schede</dt><dd><?php echo esc_html(number_format_i18n((int)$families)); ?></dd></div>
<?php endif; endif; ?></dl></div></section>
<section class="pdbh-section" id="catalogo"><div class="pdbh-wrap"><p class="pdbh-kicker">Consulta il patrimonio scientifico</p><h2>Esplora l’Atlante</h2><div class="pdbh-grid">
<?php foreach($areas as $type=>$area): if(!post_type_exists($type)) continue; ?>
<a class="pdbh-entry" href="<?php echo esc_url(add_query_arg('atlas_area',$type,$atlas)); ?>"><strong><?php echo esc_html($area[0]); ?></strong><span><?php echo esc_html($area[1]); ?></span><span aria-hidden="true">Esplora →</span></a>
<?php endforeach; ?><a class="pdbh-entry" href="#percorsi"><strong>Percorsi tematici</strong><span>Approfondimenti botanici, storici e culturali.</span><span aria-hidden="true">Esplora →</span></a></div></div></section>
<section class="pdbh-section" id="percorsi"><div class="pdbh-wrap"><p class="pdbh-kicker">Leggere la Bibbia attraverso le piante</p><h2>Percorsi e approfondimenti</h2><div class="pdbh-paths">
<?php if($seven): ?><article class="pdbh-path"><?php if(has_post_thumbnail(778)) echo get_the_post_thumbnail(778,'medium_large',array('loading'=>'lazy','alt'=>'')); ?><div><h3>Le sette specie della Terra Promessa</h3><p>Le colture di Deuteronomio 8 e la tradizione delle sette specie.</p><a href="<?php echo esc_url($seven); ?>">Leggi il percorso →</a></div></article><?php endif; ?>
<?php if($method): ?><article class="pdbh-path"><?php if(has_post_thumbnail(129)) echo get_the_post_thumbnail(129,'medium',array('loading'=>'lazy','alt'=>'')); ?><div><h3>Fonti e identificazioni botaniche</h3><p>Come distinguiamo le identificazioni consolidate, probabili, controverse e non determinate.</p><a href="<?php echo esc_url($method); ?>">Scopri il metodo →</a></div></article><?php endif; ?>
</div></div></section>
<section class="pdbh-section" id="approfondimenti"><div class="pdbh-wrap"><p class="pdbh-kicker">Dal catalogo botanico</p><h2>Piante in evidenza</h2><div class="pdbh-featured">
<?php if(post_type_exists('pdb_plant')): $plants=new WP_Query(array('post_type'=>'pdb_plant','post_status'=>'publish','posts_per_page'=>4,'no_found_rows'=>true,'ignore_sticky_posts'=>true,'meta_query'=>array(array('key'=>'_thumbnail_id','compare'=>'EXISTS')))); while($plants->have_posts()): $plants->the_post(); ?>
<a class="pdbh-entry" href="<?php echo esc_url(get_permalink()); ?>"><?php echo get_the_post_thumbnail(get_the_ID(),'medium',array('loading'=>'lazy','alt'=>'')); ?><h3><?php echo esc_html(html_entity_decode(get_the_title(),ENT_QUOTES,'UTF-8')); ?></h3><span aria-hidden="true">Consulta la scheda →</span></a>
<?php endwhile; wp_reset_postdata(); endif; ?></div><p><a href="<?php echo esc_url(add_query_arg('atlas_area','pdb_plant',$atlas)); ?>">Tutte le schede botaniche →</a></p></div></section>
<section class="pdbh-section pdbh-method" id="il-progetto"><div class="pdbh-wrap"><p class="pdbh-kicker">Il progetto</p><h2>Botanica, testi e rigore documentale</h2><p>Il nome di una pianta nelle Scritture non coincide necessariamente con una sola specie moderna. L’Atlante confronta le fonti storico-botaniche con la tassonomia contemporanea e distingue le interpretazioni filologiche dalle conoscenze botaniche. Le testimonianze medicinali sono documentate a fini storici e scientifici, non come indicazioni terapeutiche.</p><?php if($method): ?><a href="<?php echo esc_url($method); ?>">Fonti e metodologia dell’Atlante →</a><?php endif; ?></div></section>
</div>
<?php get_footer(); ?>

