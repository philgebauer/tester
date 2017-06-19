<?php 	/**
	 * The WordPress Query class.
	 * @link http://codex.wordpress.org/Function_Reference/WP_Query
	 *
	 */
	$args = array(
		'post_type'   => 'post',
		'posts_per_page'         => 3,
		'meta_query' => array( 
	        array(
	            'key' => '_thumbnail_id'
	        ) 
	    )
	);

$query = new WP_Query( $args );

if ( $query->have_posts() ): ?>
<section class="blog-roll">
	<div class="blog-roll-container">
		<div class="blog-posts">
			<?php while ( $query->have_posts() ): $query->the_post(); ?>
				<div <?php post_class(); ?>>
					<a href="<?php the_permalink(); ?>" class="card-image" <?php echo ( has_post_thumbnail( $post->ID ) ) ? 'style="background-image: url(\'' . get_the_post_thumbnail_url( $post->ID, 'medium' ) . '\');"' : '' ; ?>></a>
					<div style="position: relative;">
						<div class="card-title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</div>
					</div>
					<div class="card-read-more">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php _e( 'Read More', 'youthcare' ); ?> <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>
<?php endif; ?>
<?php wp_reset_postdata(); ?>