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

// Load values and assign defaults.
$bg = get_field('background_image');

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

    <div class="testimonial-slider">
        <div>
            <p>I have worked with Kelly & Company for the last 15 years.  They have been an invaluable strategic advisor as I have built high-performing teams in each of the businesses that I have managed.  They are focused on my success and take the time to understand my business strategy, culture and team dynamics.  With this in mind, they are able to find me the right person at the right time for my business.  Other executive recruiters approach their work as a transactional business.  Kelly & Company approaches it as a strategic necessity.  I would never work with anybody else.</p>
            <h2>Michael Sternklar, CEO, benefitexpress</h2>
        </div>
        <div>
            <p>“Thank you for a job well done!!  I could not be happier with the outcome as well as the process. In many ways it feels like we have known each other for a long time. Thanks to you and your team for a job well done!<p>
            <h2>Paolo Spada, Vice President of Finance, Omnicom Group, Inc.</h2>
        </div>
    </div>

</div>