<?php

function theme_styles() {
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'google_font', 'https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&display=swap', array(), '1.0', 'all' );
	wp_enqueue_style( 'animate_css', get_template_directory_uri() . '/css/animate.css' );
	// wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/kelly.css', array(), '1.2', 'all' );
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_js() {

	wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCg69nT1k1Zll0UMgj4nlnIanwlqZrbbsc&callback=myMap', array(), '1.0', true );
	wp_enqueue_script( 'font_awesome', 'https://kit.fontawesome.com/54b0c353c1.js', array(), '5.2.4', true );

	wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script('bootstrap_hover', get_template_directory_uri() . '/js/jquery.bootstrap-dropdown-hover.min.js', array('jquery', 'bootstrap_js'), '1.0', true);
	wp_enqueue_script('script_js', get_template_directory_uri() . '/js/script.js', array('jquery', 'bootstrap_js'), '1.0', true );

}

add_action( 'wp_enqueue_scripts', 'theme_js' );
// add_filter( 'show_admin_bar', '__return_false' );


//add_theme_support( 'menus' ); // This is to set the custom and dynamic menus
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'kellyandco' ),
) );

require_once('wp_bootstrap_navwalker.php'); // Register Custom Navigation Walker

add_theme_support( 'post-thumbnails' ); // this allows you to set a featured image

require get_template_directory() . '/inc/acf-block-support.php';

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}

// add_action( 'wp_enqueue_scripts', 'prefix_enqueue_awesome' );

/**
 * Register and load font awesome CSS files using a CDN.
 *
 * @link   http://www.bootstrapcdn.com/#fontawesome
 * @author FAT Media
 */

// function prefix_enqueue_awesome() {
// 	wp_enqueue_style( 'prefix-font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array(), '4.5.0' );
// }

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
