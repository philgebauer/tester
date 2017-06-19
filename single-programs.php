<?php
/*
	This is the Program Profile template. Shows only one program.
*/
	get_header();
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="container">
		<div class="col-sm-12 col-md-6 col-lg-9">
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</div>
	</div>
<?php endwhile; ?>
  <!-- post navigation -->
<?php else: ?>
  <?php get_template_part( 'inc/component', 'no-content' ); ?>
<?php endif; ?>
<?php get_footer(); ?>