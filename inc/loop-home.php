<!-- being loop-home.php -->
<?php if ( have_posts() ) : ?>
<section class="loop-home">
	<div class="container">
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="col-md-6 col-lg-6 loop-content">
			<h3 class="loop-home-title"><?php the_title(); ?></h3>
			<div class="loop-home-content">
				<?php the_content(); ?>
			</div>
			<div class="loop-home-button-container">
				<a class="btn-md btn-purple btn-arrow" href="<?php home_url( '/about' ); ?>"><?php _e( 'About Us', 'youthcare' ); ?></a>
			</div>
		</div>
		<?php if(has_post_thumbnail()): ?>
		<div class="col-md-4 col-md-offset-2 col-lg-5 col-lg-offset-1">
			<div class="front-page-featured-image">
				<?php the_post_thumbnail('full'); ?>
			</div>
		</div>
		<?php endif; // has_post_thumbnail ?>
	<?php endwhile; ?>
	</div>
</section>
<?php endif; ?>
<!-- end loop-home.php -->
