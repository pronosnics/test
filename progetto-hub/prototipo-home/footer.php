<?php if(!defined('ABSPATH')) exit; $opts=pdb_theme_settings();
$atlas=get_post_status(131)==='publish'?get_permalink(131):pdb_theme_archive_url();
?>
<?php if(pdb_theme_atlas_owns_main()): ?></div><?php else: ?></main><?php endif; ?>
<footer class="site-footer pdb-shell-footer"><div class="container footer-grid">
<div><div class="footer-title">❦ <?php bloginfo('name'); ?></div><p><?php echo esc_html($opts['footer_text']??'Un progetto di studio botanico e biblico.'); ?></p><p>Le identificazioni botaniche sono discusse alla luce delle fonti. Gli usi medicinali sono documentati a fini storici e scientifici.</p></div>
<div><h2>Consulta l’Atlante</h2><a href="<?php echo esc_url($atlas); ?>">Ricerca generale</a>
<?php foreach(array('pdb_plant'=>'Piante e famiglie','pdb_quote'=>'Citazioni bibliche','pdb_term'=>'Nomi antichi','pdb_medicine'=>'Medicina storica','pdb_source'=>'Bibliografia') as $type=>$label): if(!post_type_exists($type)) continue; ?><a href="<?php echo esc_url(add_query_arg('atlas_area',$type,$atlas)); ?>"><?php echo esc_html($label); ?></a><?php endforeach; ?></div>
<div><h2>Percorsi</h2><a href="<?php echo esc_url(home_url('/#percorsi')); ?>">Tutti i percorsi</a><?php if(get_post_status(778)==='publish'): ?><a href="<?php echo esc_url(get_permalink(778)); ?>">Sette specie della Terra Promessa</a><?php endif; ?><a href="<?php echo esc_url(home_url('/#approfondimenti')); ?>">Piante in evidenza</a></div>
<div><h2>Il progetto</h2><?php if(get_post_status(2035)==='publish'): ?><a href="<?php echo esc_url(get_permalink(2035)); ?>">Fonti e metodologia</a><?php endif; ?><a href="<?php echo esc_url(home_url('/#il-progetto')); ?>">Presentazione dell’Atlante</a><?php if(!empty($opts['contact_email'])): ?><a href="mailto:<?php echo esc_attr($opts['contact_email']); ?>">Contatti</a><?php endif; ?><?php if(has_nav_menu('footer')) wp_nav_menu(array('theme_location'=>'footer','container'=>false,'depth'=>1)); ?></div>
</div><div class="container footer-bottom"><span>© <?php echo esc_html(date_i18n('Y')); ?> <?php bloginfo('name'); ?></span><span>Atlante botanico e biblico · Consultazione documentale</span></div></footer>
<?php wp_footer(); ?></body></html>

