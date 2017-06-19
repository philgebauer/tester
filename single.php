<?php get_header(); ?>
<!-- Begin loop-general.php --><?php
/*
	This is the general blog post loop.
	It should be used whenever displaying a blog post with the blog's standard sidebar.
*/
?>
<div class="container">
<div class="col-sm-12 back-to-blog-link">
	<a href="<?php echo get_page_link( get_option('page_for_posts') ); ?>"><i class="fa fa-arrow-left"></i>&nbsp;<?php echo get_field( 'back_to_blog_link_text', 'options' ) ?? __( 'Back to Blog', 'youthcare' ); ?></a>
</div>
<?php if ( have_posts() ): ?>
		<?php if ( is_active_sidebar( 'blog' )): ?>
			<div class="col-sm-12 col-md-8 col-lg-8">
		<?php else: ?>
			<div class="col-sm-12 col-md-12 col-lg-12">
		<?php endif; ?>
<?php while ( have_posts() ) : the_post(); ?>
			<section <?php post_class(''); ?>>
					<h2 class="post-title"><?php the_title(); ?></h2>
					<div class="post-info">
						<span class="post-author"><?php _e( 'by', 'youthcare' ); ?> <?php the_author(); ?></span>
					</div>
					<div class="post-content">
						<?php the_content(); ?>
					</div>
					<div class="post-meta">
						<div class="post-tags"><?php the_tags( '', '' ); ?></div>
						<div class="post-time"><?php the_time('M d, Y'); ?></div>
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
<?php endif; ?>
	</div>
	<?php if( is_active_sidebar('blog') ): ?>
	<div class="col-sm-12 col-md-3 col-md-offset-1 col-lg-3 col-lg-offset-1 sidebar-container">
		<ul class="sidebar-blog">
			<?php dynamic_sidebar('blog'); ?>
		</ul>
	</div>
	<?php endif; ?>
	
<?php else: // have_posts ?>
  <?php get_template_part('inc/component', 'no-content'); ?>
<?php endif; //have_posts ?>
</div>
<?php get_template_part( 'inc/component', 'blog-roll-small' ); ?>
<!-- End loop-general.php -->

<?php get_footer(); ?>