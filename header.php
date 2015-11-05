<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else bloginfo('name'); wp_title(''); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
	<!-- JAVA JQUERY -->
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<!-- BOOTSTRAP JQUERY -->
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
<!-- masonry css -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/masonry.css">
<!-- categories.css -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/categories.css">
<!-- calendar css -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/calendar.css">
<!-- masonry -->
	<script src="<?php bloginfo('template_directory'); ?>/js/masonry.pkgd.js"></script>

<!-- font -->
	<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	
	<?php wp_head();?>

</head>
<body>
	<div class="logo">
		<logo><span>Life</span>Essentials</logo>
	</div>
	<div class="container">

	<div class="row whitefont">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><logo><span>Life</span>Essentials</logo></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="<?php bloginfo('url'); ?>">HOME<span class="sr-only">(current)</span></a></li>
						<li><a href="<?php bloginfo('template_directory'); ?>/page-about.php">ABOUT</a></li>
						<li><a href="<?php bloginfo('template_directory'); ?>/page-posts.php">POSTS</a></li>
						<li><a href="<?php bloginfo('template_directory'); ?>/page-gallery.php">GALLERY</a></li>
						<li><a href="<?php bloginfo('template_directory'); ?>/page-advertise.php">ADVERTISE</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>

	</div>

