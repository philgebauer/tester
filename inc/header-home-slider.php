<div class="slider home-slider">
	<div class="slider-header">
<?php /* ?>		<a href="<?php site_url(); ?>" class="main-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/inc/images/logos/logo-white.png" /></a>
		<a href="<?php site_url(); ?>" class="mobile-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/inc/images/logos/ball.png" /></a>
		<div class="upper-menu">
			<?php wp_nav_menu( array(
			'theme_location' => 'slider',
			'container_class' => false, 
			'menu_class' => 'home-slider-menu',
			'menu_id'	=> 'home-slider-menu',
			'depth' => 0
			) ); ?>
		</div><?php */ ?>
		<?php get_template_part( 'inc/menu', 'header' ); ?>
	</div>
<?php if( have_rows('slider') ): ?>
	<div class="main-slider">
<?php while( have_rows('slider') ): the_row(); ?>
		<div class="slide" style="background-image: url('<?php echo get_sub_field( 'slide_image' ); ?>');">
			<div class="slide-content container">
				<div class="col-sm-12 col-md-6 col-lg-7">
					<h2 class="slide-title"><?php echo get_sub_field( 'slide_title' ); ?></h2>
					<p class="slide-text"><?php echo get_sub_field( 'slide_text' ) ?></p>
				</div>
				<div class="slider-button-container col-sm-12 col-md-6 col-lg-5">
					<a href="<?php echo get_sub_field( 'slide_button_url' ); ?>" class="btn-md btn-arrow btn-<?php echo get_sub_field( 'slide_button_color' ); ?>"><?php echo get_sub_field( 'slide_button_text' ); ?></a>
				</div>
			</div>
		</div>
<?php endwhile; ?>
	</div>
<?php endif; ?>	
</div>