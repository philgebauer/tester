<?php get_header(); ?>
<?php
/*
	This is the events loop.
*/
?>
<div class="container">
<?php if ( have_posts() ): ?>
		<div class="col-lg-12">
<?php while ( have_posts() ) : the_post(); ?>
			<section <?php post_class(''); ?>>
				<?php if( has_post_thumbnail() ): ?>
					<?php the_post_thumbnail(); ?>
				<?php else: ?>
					<?php // TODO: [DEV][DESIGN] Set Event Thumbnail Size ?>
					<a href="<?php the_permalink(); ?>"><img src="https://placehold.it/250x250" alt="<?php _e('Empty Event Photo', 'youthcare'); ?>" /></a>
				<?php endif; ?>
					<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="post-content">
						<?php the_excerpt(); ?>
					</div>
			</section>
<?php endwhile; if( get_previous_posts_link() || get_next_posts_link() ): ?>
		<div class="post-navigation container">
<?php if( get_previous_posts_link() ): ?>
			<div class="nav-link-container col-lg-6">
				<?php previous_posts_link( __( 'Previous Page', 'youthcare' ) ); ?>
			</div>
<?php endif; // get_previous_posts_link ?>
<?php if( get_next_posts_link() ): ?>
			<div class="nav-link-container col-lg-6">
			 	<?php next_posts_link( __( 'Next Page', 'youthcare' ) ); ?>
			 </div>
<?php endif; // get_next_posts_link ?>
		</div>
<?php endif; // get_previous_posts_link || get_next_posts_link ?>
	</div>
<?php else: // have_posts ?>
  <?php get_template_part('inc/component', 'no-content'); ?>
<?php endif; //have_posts ?>
</div>
<?php get_footer(); ?>