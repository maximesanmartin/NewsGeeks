<div class="head" id="top" style="background-image: url('<?php bloginfo( "template_directory" ); ?>/img/banner.jpg');">
	<div id="title"><img src="<?php bloginfo( 'template_directory' ); ?>/img/logo.png">NewsGeeks</div>
</div>
<nav class="navbar navbar-inverse" role="navigation" id="slide-nav">
	<div class='container'>
		<div class="navbar-header">
			<a class="navbar-toggle">
				<span class="sr-only">Toggle navigation</span>
				<i class="button-navbar fa fa-bars fa-2x" aria-hidden="true" style="color: white"></i>
			</a>
      <a class="navbar-brand" href="<?php bloginfo('url'); ?>">NewsGeeks</a>
		</div>
		<div id="slidemenu">
			<ul class="nav navbar-nav">
          <?php foreach (get_categories(array("exclude" => 1)) as $category) { ?>
            <li>
              <a href="<?php echo get_category_link( $category->term_id )?>"><?php echo mb_strtoupper($category->name) ?></a>
            </li>
          <?php } ?>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="divider"></li>
  				<li>
  					<a href="<?php bloginfo( 'url' ); ?>/contact">CONTACT</a>
  				</li>
  				<li>
  					<a href="<?php bloginfo( 'url' ); ?>/about">A PROPOS</a>
  				</li>
  			</ul>
		</div>
	</div>
</nav>