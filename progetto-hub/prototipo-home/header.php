<?php if (!defined('ABSPATH')) exit;
$atlas=get_post_status(131)==='publish'?get_permalink(131):pdb_theme_archive_url();
$paths=home_url('/#percorsi');
$method=get_post_status(2035)==='publish'?get_permalink(2035):'';
wp_enqueue_style('pdb-editorial-shell',get_theme_file_uri('/assets/editorial-shell.css'),array('erbario-biblico'),'1.1.0-draft2');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head><meta charset="<?php bloginfo('charset'); ?>"><meta name="viewport" content="width=device-width, initial-scale=1"><?php wp_head(); ?></head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#contenuto">Vai al contenuto</a>
<header class="site-header pdb-shell"><div class="container pdb-shell-top">
<div class="site-brand"><?php if(has_custom_logo()){the_custom_logo();}else{echo '<a class="brand-symbol" href="'.esc_url(home_url('/')).'" aria-label="Torna alla homepage"><span aria-hidden="true">❦</span></a>';} ?>
<div><a class="brand-name" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a><span class="brand-tagline">Botanica · Filologia · Storia</span></div></div>
<form class="pdb-shell-search" role="search" aria-label="Ricerca rapida" action="<?php echo esc_url($atlas); ?>" method="get"><label class="screen-reader-text" for="pdb-shell-q">Cerca nell’Atlante</label><input id="pdb-shell-q" type="search" name="atlas_q" placeholder="Cerca nell’Atlante…" required><button type="submit">Cerca</button></form>
</div><div class="pdb-shell-navband"><div class="container pdb-shell-navinner">
<nav class="desktop-nav" aria-label="Menu principale"><?php wp_nav_menu(array('theme_location'=>'primary','container'=>false,'menu_class'=>'nav-list','fallback_cb'=>'wp_page_menu','depth'=>2)); ?><a class="pdb-shell-path" href="<?php echo esc_url($paths); ?>">Percorsi tematici</a></nav>
<details class="mobile-menu"><summary>☰ Menu di consultazione</summary><nav aria-label="Menu mobile"><?php wp_nav_menu(array('theme_location'=>'primary','container'=>false,'menu_class'=>'mobile-nav-list','fallback_cb'=>'wp_page_menu','depth'=>2)); ?><a class="pdb-shell-path" href="<?php echo esc_url($paths); ?>">Percorsi tematici</a></nav></details>
<?php if($method): ?><a class="pdb-shell-method" href="<?php echo esc_url($method); ?>">Metodo scientifico</a><?php endif; ?>
</div></div></header>
<?php if(!is_front_page()) pdb_theme_breadcrumbs(); ?>
<?php if(pdb_theme_atlas_owns_main()): ?><div id="contenuto" tabindex="-1"><?php else: ?><main id="contenuto" tabindex="-1"><?php endif; ?>

