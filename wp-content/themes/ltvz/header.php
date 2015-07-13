<!doctype html>  
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('name') . wp_title( ' -', true, 'left' ); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lobster|Satisfy|Neuton">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header>
			<div class="container">
				<img class="img-responsive" />
			</div>
		</header>
		<div id="main-container">
			<div id="content" class="container">