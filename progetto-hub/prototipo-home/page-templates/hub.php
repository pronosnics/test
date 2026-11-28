<?php
/**
 * Template Name: Percorso tematico dell'Atlante
 * Template Post Type: page
 */
if (!defined('ABSPATH')) exit;
wp_enqueue_style('pdb-hub-editorial',get_theme_file_uri('/assets/hub-editorial.css'),array('erbario-biblico'),'1.1.0-draft4');
get_header();
while(have_posts()): the_post();
$index=get_page_by_path('percorsi-tematici',OBJECT,'page');
$atlas=get_post_status(131)==='publish'?get_permalink(131):home_url('/atlante/');
?>
<article class="pdbhub">
<header class="pdbhub-head"><div class="pdbhub-wrap"><p class="pdbhub-kicker">Atlante botanico e biblico · Percorsi tematici</p><h1><?php the_title(); ?></h1><?php if(has_excerpt()): ?><p class="pdbhub-deck"><?php echo esc_html(get_the_excerpt()); ?></p><?php endif; ?></div></header>
<div class="pdbhub-wrap pdbhub-body"><div class="pdbhub-content entry-content"><?php the_content(); wp_link_pages(); ?></div>
<nav class="pdbhub-return" aria-label="Altri percorsi"><?php if($index && $index->post_status==='publish' && (int)$index->ID!==get_the_ID()): ?><a href="<?php echo esc_url(get_permalink($index)); ?>">← Tutti i percorsi tematici</a><?php endif; ?><a href="<?php echo esc_url($atlas); ?>">Esplora l’Atlante →</a></nav></div></article>
<?php endwhile; get_footer(); ?>

