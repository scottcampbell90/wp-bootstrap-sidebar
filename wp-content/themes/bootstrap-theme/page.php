<?php get_header(); ?>

	<div class="row">
		<div class="col-sm-8">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php the_title( $before='<h2>', $after='</h2>', $echo=true ); ?>
				
				<?php the_content(); ?>

			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
			<!-- no posts found -->
			<?php endif; ?>
			
		</div>

		

		<div class="col-sm-4">
				
				<?php get_sidebar(); ?>

	</div>
</div>

<?php get_footer(); ?>