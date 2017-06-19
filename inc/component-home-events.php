<?php
	$post_object = get_field('featured_event');
	if( $post_object ):
	$post = $post_object;
	setup_postdata( $post );
?>
<section class="home-events">
	<div class="container">
	<?php if(has_post_thumbnail()): ?>
		<div class="col-lg-4 col-md-4 col-sm-4 event-thumbnail-container">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'event_home_feature' ); ?></a>
		</div>
		<div class="col-lg-7 col-lg-offset-1 col-md-7 col-md-offset-1 col-sm-8">
	<?php else: ?>
		<div class="col-lg-12">
	<?php endif; ?>
			<h2 class="event-title"><?php the_title(); ?></h2>
			<div class="event-time"><?php the_time('M d, Y'); ?></div>
			<div class="event-content"><?php the_content(); ?></div>
		<div class="events-btn-container">
			<a href="<?php the_permalink(); ?>" class="btn-md btn-green btn-arrow">More Info</a>
		</div>
	</div>
</section>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
