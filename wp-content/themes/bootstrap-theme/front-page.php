<?php 
//Template Name: Home
 ?>

<?php get_header(); ?>


<!-- <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol> -->

  <!-- Wrapper for slides -->
<!--   <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php the_field("image_1", 29); ?>" alt="...">
       <div class="carousel-caption">
        caption
      </div>
    </div>
    <div class="item">
      <img src="<?php the_field('image_2', 29); ?>" alt="...">
       <div class="carousel-caption">
        caption
      </div>
    </div>
    <div class="item">
      <img src="<?php the_field('image_3', 29); ?>" alt="...">
      <div class="carousel-caption">
        caption
      </div>
    </div>
  </div>

   Controls
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->



<!-- Page Content -->
<div id="page-content-wrapper">
  <div class="container-fluid">

    <div class="row">
      <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="fa fa-bars"></i></a>

      <?php if ( have_posts() ) : 

        query_posts();

        while ( have_posts() ) : the_post(); ?>
      
        <div class="col-md-12">
          <div class="col-md-4">
            <div class="thumbnail post-thumbnail">
              <?php the_post_thumbnail(); ?>
            </div>
          </div>
          <div class="col-md-8">
            <div class="post-title">
              <h2><a href="<?php the_excerpt(); ?>"><?php the_title(); ?></a></h2> 
            </div>
            <div class="post-excerpt">
              <?php the_excerpt(); ?>
              <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-read-more">Read More</a>
            </div>
          </div>
        </div>

      <?php endwhile; ?>
      <!-- post navigation -->
      <?php else: ?>
      <!-- no posts found -->
      <?php endif; ?>

    </div> <!-- /.row -->
  </div> <!-- /.container-fluid -->

</div>
<!-- /#page-content-wrapper -->

</div>
 <!-- /#wrapper -->



	
<?php get_footer(); ?>