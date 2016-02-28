<?php 

function theme_styles() {
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'google_font', 'https://fonts.googleapis.com/css?family=Lato:400,300' );
	wp_enqueue_style( 'animate_css', get_template_directory_uri() . '/css/animate.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'media_css', get_template_directory_uri() . '/css/kelly.css' );
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_js() {

	global $wp_scripts;

	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );
	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

	wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script('script_js', get_template_directory_uri() . '/js/script.js', array('jquery', 'bootstrap_js'), '', true );

}

add_action( 'wp_enqueue_scripts', 'theme_js' );
// add_filter( 'show_admin_bar', '__return_false' );


//add_theme_support( 'menus' ); // This is to set the custom and dynamic menus
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'kellyandco' ),
) );

require_once('wp_bootstrap_navwalker.php'); // Register Custom Navigation Walker

add_theme_support( 'post-thumbnails' ); // this allows you to set a featured image



add_action( 'wp_enqueue_scripts', 'prefix_enqueue_awesome' );

/**
 * Register and load font awesome CSS files using a CDN.
 *
 * @link   http://www.bootstrapcdn.com/#fontawesome
 * @author FAT Media
 */

function prefix_enqueue_awesome() {
	wp_enqueue_style( 'prefix-font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array(), '4.4.0' );
}

// Add extra classes for the first and last items in all WordPress menus
add_filter( 'wp_nav_menu_objects', function ( $items ) {
   if ( ! empty( $items ) ) {
      $items[1]->classes[] = 'menu-item-first';
      $items[ count( $items ) ]->classes[] = 'menu-item-last';
   }
 
   return $items;
} );

function create_widget($name, $id, $description) {

	register_sidebar(array(
		'name' => __( $name ),
		'id' => $id,
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h6>',
		'after_title' => '</h6>'
	));

}

create_widget( 'Footer First Column', 'first-column', 'Displays in the first column of the footer' );
create_widget( 'Footer Second Column', 'second-column', 'Displays in the second column of the footer' );
create_widget( 'Footer Third Column', 'third-column', 'Displays in the third column of the footer' );

create_widget( 'Page Sidebar', 'page', 'Displays on the side of the pages with a sidebar' );
create_widget( 'Blog Sidebar', 'blog-right', 'Displays on the side of pages in the blog section' );


?>