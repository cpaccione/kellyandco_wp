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
            wp_enqueue_style( 'peak-title', get_template_directory_uri() . '/template-parts/blocks/columns/contact_columns/contact-columns.css', array(), '1.0', 'all' );
        },
        'category'          => 'common',
        'mode'              => 'auto',
        'post_types'        => array('page'),
        // 'icon'              => 'admin-comments',
        'icon' => array(
            // Specifying a background color to appear with the icon e.g.: in the inserter.
            'background' => '#00A1ED',
            // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
            'foreground' => '#ffffff',
            // Specifying a dashicon for the block
            'src' => 'admin-comments',
          ),
        'keywords'          => array( 'Kelly and Company', 'Contact', 'Columns' ),
        
    ));
}
