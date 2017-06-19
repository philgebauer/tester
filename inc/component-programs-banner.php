<?php

$queryArgs = array( 
	'post_type'				=> 'programs',
	'posts_per_page'		=> 4,
  'order'             => 'ASC'
 );

$programs = new WP_Query( $queryArgs );

?>

<?php if ( $programs->have_posts() ) : ?>
	<section class="program-banner">
<?php while ( $programs->have_posts() ) : $programs->the_post(); ?>
  	<a class="program" href="<?php the_permalink(); ?>">
  		<div>
  			<img src="<?php echo get_stylesheet_directory_uri() . '/inc/images/logos/ball.png'; ?>" alt="<?php the_title(); ?>" />
  		</div>
  		<div>
  			<?php the_title(); ?>
		</div>
	</a>
<?php endwhile; ?>
	</section>
<?php else: ?>
  <!-- no posts found -->
<?php endif; ?>

<?php wp_reset_postdata(); ?>