<div class="col-sm-3" id="sidebar">
	<nav id="site-navigation" class="main-navigation" role="navigation">
		<?php
			// Primary navigation menu.
			wp_nav_menu( array(
				'menu_class'     => 'nav-menu',
				'theme_location' => 'primary',
			) );
		?>
	</nav>
	<!-- .main-navigation -->

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="widget-area" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
		<!-- .widget-area -->
	<?php endif; ?>
</div>