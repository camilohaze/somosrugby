<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 */

get_header(); ?>

	<?php get_template_part('menu'); ?>
	<div id="primary" class="content-area col-sm-9">
		<main id="main" class="site-main" role="main">
		
		<?php

		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );


		endwhile;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>