<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
	<!-- stylesheets -->
	<link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <title><?php bloginfo( 'name' ); ?></title>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
<body>

  <div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
      <div class="sidebar-brand-wrapper">
        <a class="sidebar-brand" href="<?php bloginfo('url')?>">
          <img style="width:250px;"  src="<?php bloginfo('template_directory') ?>/img/skateboard.png" />
        </a>

      </div>
      <?php /* Primary navigation */
        wp_nav_menu( array(
        'top_menu',
        'depth' => 2,
        'container' => false,
        'menu_class' => 'sidebar-nav',
        //Process nav menu using our custom nav walker
        'walker' => new wp_bootstrap_navwalker())
        );
      ?>
          <div class="social-nav">
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa fa-twitter"></i></a>
            <a href=""><i class="fa fa-instagram"></i></a>
            <a href=""><i class="fa fa-tumblr"></i></a>
          </div>

      
    </div>
    <!-- /#sidebar-wrapper -->


    
