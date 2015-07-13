<?php
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>

	<?php get_template_part('menu'); ?>
	<div id="primary" class="content-area col-sm-9">
		<main id="main" class="site-main" role="main">

		<?php

		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content', get_post_format() );


		endwhile;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>