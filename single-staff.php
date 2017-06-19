<?php
/*
	This is the single staff member loop.
	It will show a single staff member's profile.
*/
	get_header();
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="container">
		<div class="col-sm-12 col-md-6 col-lg-9">
			<h2><?php the_title(); ?></h2>
			<p><?php // TODO: [DEV][ACF] get_filed('staff_title'); ?></p>
			<?php the_content(); ?>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-3">
			<?php if( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'staff_thumb' ); // TODO: [DESIGN][DEV] Define a staff tumb size for the Staff single page. ?>
			<?php else: // has_post_thumbnail ?>
				<img src="http://placehold.it/278x300" alt="Empty Staff Member Photo" />
			<?php endif; // has_post_thumbnail ?>
		</div>
	</div>
<?php endwhile; ?>
  <!-- post navigation -->
<?php else: ?>
  <?php get_template_part( 'inc/component', 'no-content' ); ?>
<?php endif; ?>
<?php get_footer(); ?>