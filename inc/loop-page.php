<!-- Being loop-page.php --><?php
/*
	This is the general blog post loop.
	It should be used whenever displaying a blog post with the blog's standard sidebar.
*/
?>
<div class="container">
<?php if ( have_posts() ): ?>
		<div class="col-sm-12 col-md-7 col-lg-9">
<?php while ( have_posts() ) : the_post(); ?>
			<section <?php post_class(''); ?>>
					<h2 class="post-title"><?php the_title(); ?></h2>
					<div class="post-content">
						<?php the_content(); ?>
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
	<div class="col-sm-12 col-md-5 col-lg-3">
		<?php if( is_active_sidebar('page') ): ?>
		<ul class="sidebar-page">
			<?php dynamic_sidebar('page'); ?>
		</ul>
		<?php endif; ?>
	</div>
<?php else: // have_posts ?>
  <?php get_template_part('inc/component', 'no-content'); ?>
<?php endif; //have_posts ?>
</div>
<!-- End loop-page.php -->