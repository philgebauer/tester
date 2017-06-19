<?php
/*
	This is the staff member loop.
	It will show all staff members in rows of four with an image, name and title.
*/
	get_header();
?>
<div class="container">
<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
			<div <?php post_class('col-sm-12 col-md-6 col-lg-3'); ?>>
			
			<?php if( has_post_thumbnail() ) : ?>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'staff_thumb' ); // TODO: [DESIGN][DEV] Define a staff tumb size for the Staff loop page. ?></a>
			<?php else: // has_post_thumbnail ?>
				<a href="<?php the_permalink(); ?>"><img src="http://placehold.it/200x200" alt="<?php _e('Empty Staff Photo', 'youthcare'); ?>" /></a>
			<?php endif; // has_post_thumbnail ?>
				<h2 class="staff-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p class="staff-title"><a href="<?php the_permalink(); ?>"><?php // TODO: [DEV][ACF] get_field('staff_title') ?></a></p>
			</div>
<?php endwhile; ?>
<?php else: // have_posts ?>
  <?php get_template_part('inc/component', 'no-content'); ?>
<?php endif; //have_posts ?>
</div>
<?php get_footer(); ?>