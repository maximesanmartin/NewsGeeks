<div class="head" id="top" style="background-image: url('<?php bloginfo( "template_directory" ); ?>/img/banner.jpg');">
	<div id="title"><img src="<?php bloginfo( 'template_directory' ); ?>/img/logo.png">NewsGeeks</div>
</div>
<nav class="navbar navbar-inverse">
	<div class='container'>
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
  				<li>
  					<a href="<?php bloginfo('url')?>">ACCUEIL</a>
  				</li>
          <?php foreach (get_categories(array("exclude" => 1)) as $category) { ?>
            <li>
              <a href="<?php echo get_category_link( $category->term_id )?>"><?php echo mb_strtoupper($category->name) ?></a>
            </li>
          <?php } ?>
        </ul>
        <ul class="nav navbar-nav navbar-right">
  				<li>
  					<a href="/newsgeeks_wp/contact">CONTACT</a>
  				</li>
  				<li>
  					<a href="/newsgeeks_wp/about">A PROPOS</a>
  				</li>
  			</ul>
		</div>
	</div>
</nav>