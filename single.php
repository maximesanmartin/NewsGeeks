<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/article.css">
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/article.js"></script>

<?php include("navbar.php"); ?>
<div class="container">
	<div class="col-md-8 article">
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
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
		<?php previous_post_link() ?> <?php next_post_link() ?>
		<?php endif; ?>
		<div class="comments">
			<h2>Commentaires</h2>
			<div class="col-md-12">
				<?php comments_template(); ?>
				<!--<div class="col-md-12 comment">
					<h4>Maxime Sanmartin</h4>
					<div>
						<img src="img/max.jpg" class="img-circle">
						<p>Très bon article ! Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>-->
				<h3>Votre commentaire</h3>
				<input class="input" type="text" placeholder="Pseudo (Anonyme par défaut)"></input>
				<textarea class="input" placeholder="Votre commentaire ici (Supporte le balisage HTML)"></textarea>
				<button class="btn btn-primary">Envoyer</button>
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
				<li>La Xbox One S VS la nouvelle PS4</li><hr>
				<li>La domotique pour tous avec Arduino</li><hr>
				<li>Les 5 meilleurs applis pour se préparer à la rentrée</li><hr>
				<li>Notre présentation du nouveau Mac</li><hr>
				<li>Performance des nouvelles GTX 10 portables</li>
			</ul>
		</div>
	</div>
</div>
<a href="#top"><div class="scrollTop">
	<i class="fa fa-chevron-up fa-3x" aria-hidden="true"></i>
</div></a>
<?php get_footer(); ?>
