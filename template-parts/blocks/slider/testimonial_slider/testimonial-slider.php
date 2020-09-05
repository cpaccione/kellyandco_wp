<?php

/**
 * Testimonial Slider Block
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'testimonial-slider-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'testimonial-slider';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>


<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

        <?php

            // Check rows exists.
            if( have_rows('testimonial_repeater') ):
                
                echo '<div class="t-slider">';

                // Loop through rows.
                while( have_rows('testimonial_repeater') ) : the_row();

                    // Load sub field value.
                    $test = get_sub_field('testimonial');
                    $name = get_sub_field('name');
                    $title = get_sub_field('title');
                    $company = get_sub_field('company');
                    // Do something...

                    echo '<div class="slide">';
                    
                        echo '<div class="slide-wrap">';

                            echo '<p class="testimonial-text">' . $test . '</p>';
                            echo '<h2 class="name">' . $name . '</h2>';
                            echo '<h3 class="title">' . $title . '</h3>';
                            echo '<h3 class="company">' . $company . '</h3>';
      
                       echo '</div>';
                
                    echo '</div>';
                // End loop.
                endwhile;

            endif;

            echo '</div>';
        ?>
</div>