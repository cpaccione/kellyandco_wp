<?php

/*

@package Motion

	=====================
	ACF BLOCK SUPPORT
	=====================
*/

function register_acf_block_types() {

    // Register standard hero
    acf_register_block_type(array(
        'name'              => 'contact_columns',
        'title'             => __('Contact Columns'),
        'description'       => __('A block used to display two columns with contact information.'),
        'render_template'   => 'template-parts/blocks/columns/contact_columns/contact-columns.php',
        'enqueue_assets'    => function() {
            wp_enqueue_style( 'kelly-contact-block', get_template_directory_uri() . '/template-parts/blocks/columns/contact_columns/contact-columns.css', array(), '1.0', 'all' );
        },
        'category'          => 'common',
        'mode'              => 'auto',
        'post_types'        => array('page'),
        // 'icon'              => 'admin-comments',
        'icon' => array(
            // Specifying a background color to appear with the icon e.g.: in the inserter.
            'background' => '#003822',
            // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
            'foreground' => '#ffffff',
            // Specifying a dashicon for the block
            'src' => 'admin-comments',
          ),
        'keywords'          => array( 'Kelly and Company', 'Contact', 'Columns' ),
        
    ));

    // Register image hero
    acf_register_block_type(array(
        'name'              => 'image_hero',
        'title'             => __('Image Hero'),
        'description'       => __('A block used to display an image hero.'),
        'render_template'   => 'template-parts/blocks/heroes/image_hero/image_hero.php',
        'enqueue_assets'    => function() {
            wp_enqueue_style( 'kelly-image-hero-block', get_template_directory_uri() . '/template-parts/blocks/heroes/image_hero/image_hero.css', array(), '1.0', 'all' );
        },
        'category'          => 'common',
        'mode'              => 'auto',
        'post_types'        => array('page'),
        // 'icon'              => 'admin-comments',
        'icon' => array(
            // Specifying a background color to appear with the icon e.g.: in the inserter.
            'background' => '#003822',
            // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
            'foreground' => '#ffffff',
            // Specifying a dashicon for the block
            'src' => 'admin-comments',
            ),
        'keywords'          => array( 'Kelly and Company', 'hero', 'image' ),
        
    ));

    // Slider
    acf_register_block_type(array(
        'name'              => 'testimonial_slider',
        'title'             => __('Testimonial Slider'),
        'description'       => __('A testimonial slider.'),
        'render_template'   => 'template-parts/blocks/slider/testimonial-slider/testimonial-slider.php',
        'enqueue_assets'    => function() {
            wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/template-parts/blocks/slider/testimonial_slider/slick/slick-theme.css', array(), '1.0', 'all' );
            wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/template-parts/blocks/slider/testimonial_slider/slick/slick.css', array(), '1.0', 'all' );
            wp_enqueue_style( 'testimonial-slider-css', get_template_directory_uri() . '/template-parts/blocks/slider/testimonial-slider/testimonial-slider.css', array(), '1.0', 'all' );
            wp_enqueue_script( 'slick-js',  get_template_directory_uri() . '/template-parts/blocks/slider/testimonial_slider/slick/slick.js', array('jquery'), '1.0', true );
            wp_enqueue_script( 'custom-js',  get_template_directory_uri() . '/template-parts/blocks/slider/testimonial-slider/testimonial-slider.js', array('jquery'), '1.4', true );
        },
        'category'          => 'common',
        'mode'              => 'auto',
        'post_types'        => array('page'),
        // 'icon'              => 'admin-comments',
        'icon' => array(
            // Specifying a background color to appear with the icon e.g.: in the inserter.
            'background' => '#003822',
            // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
            'foreground' => '#ffffff',
            // Specifying a dashicon for the block
            'src' => 'admin-comments',
            ),
        'keywords'          => array( 'Kelly and Company', 'testimonial', 'slider' ),
        
    ));

}
