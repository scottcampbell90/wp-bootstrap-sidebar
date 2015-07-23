<?php get_header(); ?>

	<div class="row">
		<div class="col-md-8">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				<div class="page-header">
					<?php the_title( $before='<h2>', $after='</h2>', $echo=true ); ?>
					by: <?php the_author(); ?>
					on: <?php the_date(); ?>	
				</div>
				<div class="post-image">
					<?php the_post_thumbnail(); ?>	
				</div>
							
				<div class="post-content">
					<?php the_content(); ?>	
				</div>
				
				<div class="post-comments">
					<?php comments_template(); ?>	
				</div>
				

			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
			<!-- no posts found -->
			<?php endif; ?>
			
		</div>

		

		<div class="col-md-4">
				
				<?php get_sidebar(); ?>

	</div>
</div>

<?php get_footer(); ?>