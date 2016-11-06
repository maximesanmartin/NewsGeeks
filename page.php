<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/contact.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/about.css">

<?php include("navbar.php"); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Désolé, aucune page existante...</p>
<?php endif; ?>

<?php get_footer(); ?>