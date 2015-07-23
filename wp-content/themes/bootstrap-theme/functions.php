<?php

require_once('includes/wp_bootstrap_navwalker.php');

/* Theme setup */

// Bootstrap Navbar
// add_action( 'after_setup_theme', 'wpt_setup' );
//     if ( ! function_exists( 'wpt_setup' ) ):
//         function wpt_setup() {  
//             register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
//         } endif;

register_nav_menus(array(
	'primary' => 'Primary Navigation',
	'footer' => 'Footer Navigation',
	) );

// Thumbnails
add_theme_support( 'post-thumbnails' );

// Sidebar
$args = array(
	'name'          => 'main-sidebar',
	'description'   => 'Main Sidebar',
	'before_widget' => '<div class="sidebar-widget">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>'
);

register_sidebar( $args );


 //Bootstrap Comment template

function comment_feed($comment, $args, $depth){
	$GLOBAL['comment'] = $comment;

	?>
	
	<div class="media">
		<div class="media-left">
			<a class="media-object" href="<?php echo get_comment_author(); ?>"><?php echo get_avatar(); ?></a>
		</div>
		<div class="media-body">
			<a href="<?php echo get_comment_author(); ?>">
				<h5 class="media-heading"><?php echo get_comment_author(); ?></h5>
			</a>

			<small class="media-left"><?php comment_date(); ?> at <?php comment_time(); ?></small>
			
			<?php comment_text(); ?>
			
			<?php comment_reply_link( array_merge($args, array(
				
				'reply_text' => __('<strong>reply</strong>'),
				'depth'      => $depth,
				'max-depth'  => $args['max_depth'],

			))); ?>



		</div>

	</div>
<hr />

	<?php 
}
//filter for adding class to avatar thumnail
add_filter('get_avatar', 'add_avatar_class');

function add_avatar_class($class){

	$class = str_replace("class='avatar", "class='img-circle", $class);

	return $class;
}

//add bootstrap btn style to reply link

add_filter('comment_reply_link', 'add_reply_link_class');

function add_reply_link_class($class){

	$class = str_replace("class='comment-reply-link", "class='btn btn-default pull-right", $class);

	return $class;

}


?>