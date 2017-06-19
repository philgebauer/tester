<?php
/*
	This is the single event loop template.
*/
	get_header();
?>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<?php 
	$location = get_field('event_location_map');

	if( !empty($location) ):
	?>
	<div class="acf-map">
		<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
	</div>
	<?php endif; ?>

	<?php endwhile; ?>

<?php else: ?>


<?php endif; ?>

<?php get_footer(); ?>