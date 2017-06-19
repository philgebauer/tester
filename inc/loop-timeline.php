<?php if ( have_rows( 'timeline' ) ): ?>
	<ul class="timeline">		
	<?php while ( have_rows( 'timeline' ) ): the_row(); ?>
			<li class="timeline-item">
				<h3 class="timeline-year"><?php the_sub_field( 'timeline_year' ); ?></h3>
				<p class="timeline-text"><?php the_sub_field( 'timeline_text' ); ?></p>
			</li>
	<?php endwhile; ?>
	</ul>
<?php else: ?>
	<?php get_template_part( 'inc/component', 'no-content' ); ?>
<?php endif; ?>
