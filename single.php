<?php get_header(); ?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/article.css">
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/article.js"></script>

<?php include("navbar.php"); ?>
<div class="container">
	<div class="col-md-8 article">
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); wpb_set_post_views(get_the_ID()); ?>
		<div class="main_image" style="background-image: url('<?php if(has_post_thumbnail()) the_post_thumbnail_url(); ?>');">
			<div class="author"><?php echo get_avatar(get_the_author_meta( 'ID' ), 150, null, null, $args=array('class' => 'img-circle')) ?><div class="author_name"><?php the_author() ?></div></div>
			<h1><?php the_title(); ?></h1>
		</div>
		<div class="info">
			<i class="fa fa-calendar" aria-hidden="true">&nbsp;<?php the_time('j F Y'); ?></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-tags" aria-hidden="true"> <?php the_category(','); ?> </i>	
		</div>
		<p>
		<?php the_content(); ?>
		</p>
		<?php endwhile; ?>
		<!-- lien vers post suivant -->
		<div class="navigation"><p><?php previous_post_link("%link", "Article précédent : <strong>%title</strong>"); ?><?php next_post_link("%link", "Article suivant : <strong>%title</strong>"); ?></p></div><br/>
		<?php endif; ?>
		<div class="comments">
			<h2>Commentaires</h2>
			<div class="col-md-12">
				<?php comments_template(); ?>
			</div>
		</div>
	</div>
	<div class="col-md-4 sidebar">
		<div class="col-md-12 twitter">
			<h2>Actu Twitter</h2>
			<a class="twitter-timeline" data-dnt="true" data-theme="light" data-link-color="#E95F28" href="https://twitter.com/NewsGeeks_FLM">Tweets de NewsGeeks_FLM</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div>
		<div class="row col-md-12 trends">
			<h2>Nos meilleurs articles !</h2>
			<ul>
				<?php
				$popularpost = new WP_Query( array( 'posts_per_page' => 5, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
				while ( $popularpost->have_posts() ) : $popularpost->the_post();?>

					<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li><hr>

				<?php endwhile;
				?>
			</ul>
		</div>
	</div>
</div>
<a href="#top"><div class="scrollTop">
	<i class="fa fa-chevron-up fa-3x" aria-hidden="true"></i>
</div></a>
<?php get_footer(); ?>
