<?php 
//Template Name: Blog
 ?>
<?php get_header(); ?>

<div class="row">

	<?php if ( have_posts() ) :	while ( have_posts() ) : the_post(); ?>
	
		<div class="col-md-4">
			<div class="thumbnail">
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="post-title">
				<h2><a href="<?php the_excerpt(); ?>"><?php the_title(); ?></a></h2> 
			</div>
			<div class="post-excerpt">
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
			</div>
		</div>

	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?>
	
</div>
	
<?php get_footer(); ?>