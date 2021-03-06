<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="<?php echo esc_url('http://gmpg.org/xfn/11'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php if ( get_theme_mod('quidus_site_favicon') != '' ) : ?>
		<link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('quidus_site_favicon')); ?>" />
	<?php endif; ?>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
    <script>
        window.onload = function()
        {
            jQuery('#menu-menu-principal > .current-menu-item > button').click();
            jQuery('#menu-menu-principal > .current-menu-parent > button').click();
        }
    </script>
</head>

<body <?php body_class(); ?>>
<header>
	<div class="logo">
		<a href="<?php echo get_option( 'siteurl' ); ?>">
			<img class="logo-img" src="<?php echo get_option( 'siteurl' ); ?>/wp-content/themes/quidus/img/cabezote.png">
		</a>
	</div>
	<div class="social">
		<div class="redes">
			<ul>
				<li><a href="http://twitter.com/telemedellin" target="_blank" class="icon" data-icon="a"></a></li>
				<li><a href="http://fb.com/telemedellin.tv" target="_blank" class="icon" data-icon="b"></a></li>
				<li><a href="http://instagram.com/telemedellin" target="_blank" class="icon" data-icon="c"></a></li>
				<li><a href="https://www.youtube.com/user/telemedellin" target="_blank" class="icon" data-icon="d"></a></li>
			</ul>
		</div>
	</div>
</header>
<div class="bg-content">
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'quidus' ); ?></a>

		<div class="main-content">
			<div id="sidebar" class="sidebar">
				<?php get_sidebar(); ?>
			</div><!-- .sidebar -->

			<div id="content" class="site-content">