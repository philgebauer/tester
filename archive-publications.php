<?php get_header();
/**
 * Publications Archive Template
 * This template lists all the archive groups (posts) and each repeataer (documents) in publications.
 * Template uses a custom WordPress query to organize all groups (posts) in ascending order by name.
*/
/**
 * WordPress Query Class
 *
 * @link http://codex.wordpress.org/Function_Reference/WP_Query
 */
	$args = array(
		'post_type'   => 'publications',
		'post_status' => 'publish',
		'order'               => 'ASC',
		'orderby'             => 'name'
	);

	$query = new WP_Query( $args );

if ( $query->have_posts() ): ?>
	<ul class="publications-list">
	<?php while ( $query->have_posts() ): $query->the_post(); ?>
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