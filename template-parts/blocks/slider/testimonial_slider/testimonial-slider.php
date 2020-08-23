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
        <!-- <div class="slide">
            <div class="slide-wrap">
                <p>I have worked with Kelly & Company for the last 15 years.  They have been an invaluable strategic advisor as I have built high-performing teams in each of the businesses that I have managed.  They are focused on my success and take the time to understand my business strategy, culture and team dynamics.  With this in mind, they are able to find me the right person at the right time for my business.  Other executive recruiters approach their work as a transactional business.  Kelly & Company approaches it as a strategic necessity.  I would never work with anybody else.</p>
                <h2>Michael Sternklar</h2>
                <h3>CEO, benefitexpress</h3>         
            </div>
        </div>
        <div class="slide">
            <div class="slide-wrap">
                <p>“Thank you for a job well done!!  I could not be happier with the outcome as well as the process. In many ways it feels like we have known each other for a long time. Thanks to you and your team for a job well done!<p>
                <h2>Paolo Spada</h2>
                <h3>Vice President of Finance, Omnicom Group, Inc.</h3>            
            </div>
        </div> -->
    <!-- </div>     -->
</div>