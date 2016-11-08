<html>
<head> 
	<title><?php bloginfo('name') ?><?php if ( is_404() ) : ?> - <?php _e('Page non trouvée') ?><?php elseif ( is_home() ) : ?> - <?php bloginfo('description') ?><?php else : ?> - <?php wp_title() ?><?php endif ?></title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="icon" href="<?php bloginfo( 'template_directory' ); ?>/img/ng.png">
	<!-- JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="<?php bloginfo( 'template_directory' ); ?>/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo( 'template_directory' ); ?>/js/script.js"></script>
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300" rel="stylesheet"> 
	<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic">
	<link href="<?php bloginfo( 'template_directory' ); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel='stylesheet' type='text/css'/>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>   
	<?php wp_get_archives('type=monthly&format=link'); ?>
</head>
<body>
