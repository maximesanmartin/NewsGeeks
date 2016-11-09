<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/accueil.css">
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/accueil.js"></script>

<?php include("navbar.php"); ?>
<div class="container home">
	<div class="col-md-9 articles">
		<h1><?php single_cat_title(); ?></h1>
		<?php if(have_posts()) : ?>
          <?php while(have_posts('orderby=date&numberposts=4')) : the_post(); ?> 
          <div class="col-md-6 article">
	        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
	        <div class="main_image" style="background-image: url('<?php if(has_post_thumbnail()) the_post_thumbnail_url(); ?>')">
				<h1><?php the_title(); ?></h1>
			</div>
			</a>
	        <div class="article_body">
				<?php the_content("Lire la suite"); ?>
			</div>
          </div>
          <?php endwhile; ?> 
        <?php else : ?>
          <h2>Aucun article de cette catégorie pour le moment...</h2>
        <?php endif; ?>
	</div>
	<div class="col-md-3 sidebar">
		<div class="col-md-12 twitter">
			<h2>Actu Twitter</h2>
			<a class="twitter-timeline" data-dnt="true" data-theme="light" data-link-color="#E95F28" href="https://twitter.com/NewsGeeks_FLM">Tweets de NewsGeeks_FLM</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div>
	</div>
	<div class="col-md-9">
		<div class="nav-previous alignleft"><?php next_posts_link( '<<< Articles plus anciens' ); ?></div>
		<div class="nav-next alignright"><?php previous_posts_link( 'Articles plus récents >>>' ); ?></div>
	</div>
</div>
<?php get_footer(); ?>