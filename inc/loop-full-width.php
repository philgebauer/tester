<!-- Being loop-full-width.php --><?php
/*
	Full width loop.
*/
?>
<div class="container-fluid">
<?php if ( have_posts() ): ?>
		<div class="col-lg-12">
<?php while ( have_posts() ) : the_post(); ?>
			<section <?php post_class(''); ?>>
					<h2 class="post-title"><?php the_title(); ?></h2>
					<div class="post-content">
						<?php the_content(); ?>
					</div>
			</section>
<?php endwhile; ?>
	</div>
<?php else: // have_posts ?>
  <?php get_template_part('inc/component', 'no-content'); ?>
<?php endif; //have_posts ?>
</div>
<!-- End loop-full-width.php -->
