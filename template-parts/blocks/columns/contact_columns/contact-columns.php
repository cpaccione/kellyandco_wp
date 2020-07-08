<?php

/**
 * Contact Column Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'contact-columns-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'contact-columns';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$contact_title = get_field('title_one');
$contact_title_two = get_field('title_two');
$link = get_field('link');

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="col">
        <h3 style="margin-top: 0;"><?php echo $contact_title; ?></h3>

            <?php if( have_rows('address_repeater') ): ?>

                <?php while( have_rows('address_repeater') ): the_row(); 

                    // vars
                    $add_one = get_sub_field('address_line_one');
                    $add_two = get_sub_field('address_line_two');
                    $phone = get_sub_field('phone_number');

                    ?>

                    <div class="address">
                        <p class="line-one"><?php echo $add_one; ?></p>
                        <p class="line-two"><?php echo $add_two; ?></p>
                        <a href="tel:<?php echo $phone; ?>"><i class="fas fa-phone-alt"></i> <?php echo $phone; ?></a>
                    </div>

                <?php endwhile; ?>

            <?php endif; ?>

        <h3><?php echo $contact_title_two; ?></h3>

        <?php
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="email" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><i class="fas fa-envelope"></i> <?php echo esc_html( $link_title ); ?></a>

        <?php endif; ?>
    </div>

</div>