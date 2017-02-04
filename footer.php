<footer class="footer">
	<div class="container">
		<div class="col-md-4">
			<h4>Navigation</h4>
			<ul>
  				<li>
  					<a href="index.php">ACCUEIL</a>
  				</li>
  				<?php foreach (get_categories(array("exclude" => 1)) as $category) { ?>
	              <li>
	                <a href="<?php echo get_category_link( $category->term_id )?>"><?php echo mb_strtoupper($category->name) ?></a>
	              </li>
	            <?php } ?>
  				<li>
  					<a href="<?php bloginfo( 'url' ); ?>/contact">CONTACT</a>
  				</li>
  				<li>
  					<a href="<?php bloginfo( 'url' ); ?>/about">A PROPOS</a>
  				</li>
  			</ul>
		</div>
		<div class="col-md-4">
			<h4>Nos réseaux</h4>
			<div class="social_icons">
				<a href="https://twitter.com/NewsGeeks_FLM"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
				<a href="https://www.facebook.com/NewsGeeksFLM/?fref=ts"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
				<a href="https://www.youtube.com/user/SuperSageto"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a>
				<a href="https://www.twitch.tv/newsgeeks_gaming"><i class="fa fa-twitch fa-2x" aria-hidden="true"></i></a>
			</div>
		</div>
		<div class="col-md-4">
			<h4>Notre activité</h4>
			<p>NewsGeeks a pour objectif de communiquer nos passions pour les nouvelles technologies, ainsi que les dernières informations du moment dans le domaine du web, des jeux-vidéos, du cinéma, et bien d'autres encore !</p>
			<p>Nous ne sommes dépendants d'aucun sponsor</p>
		</div>
		<div class="col-md-12 copyright"><hr>NewsGeeks 2012-2016 - Tous droits réservés. Site web développé sous HTML5/CSS3, JQuery et Bootstrap par Maxime SANMARTIN</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>