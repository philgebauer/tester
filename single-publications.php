<?php get_header(); ?>
<?php if ( have_posts() ): ?>
	<ul class="publications-list">
	<?php while ( have_posts() ): the_post(); ?>
		<li class="publication-group">
			<h3 class="publication-group-title"><?php the_title(); ?></h3>
			<?php if ( have_rows( 'documents' ) ): ?>
				<ul class="document-list">
				<?php while ( have_rows( 'documents' ) ): the_row( 'documents' ); ?>
					<li class="document-item">
						<a class="document-link" href="<?php the_sub_field( 'document_url' ); ?>"><?php the_sub_field( 'document_name' ); ?></a>
					</li>
				<?php endwhile; ?>
				</ul>
			<?php else: ?>
					<?php _e( 'No ' . get_the_title() . ' were found.', 'youthcare' ); ?>
			<?php endif; ?>
		</li>
	<?php endwhile; ?>
	</ul>
<?php else: ?>
	<?php get_template_part( 'inc/component', 'no-content' ); ?>
<?php endif; ?>
<?php get_footer(); ?>