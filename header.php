<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<!-- masonry css -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/masonry.css">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<!-- masonry -->
	<script src="<?php bloginfo('template_directory'); ?>/js/masonry.pkgd.js"></script>
	
	<!-- font -->
	<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	
	<?php wp_head();?>

</head>
<body>
	<div class="container">

	<div class="row whitefont">
		<?php
		wp_nav_menu(['menu_class' => 'nav nav-pills',]);
		?>
	</div>

