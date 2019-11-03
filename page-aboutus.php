<?php

/*

Template Name: About Us

*/

?>


<?php get_header(); ?>

  <?php

    $featured_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 

  ?>


<section class="aboutus-hero" style="background-image: url(<?php echo $featured_img_url; ?>);"></section>

<section class="about-us">
  <div class="container">

    <div class="row">
      <div class="col-sm-12">
        <div class="about-us-wrap">
          <div class="page-title">
            <h2 class="text-center"><?php the_title(); ?></h2>  
          </div>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php the_content(); ?>

            <?php endwhile; else: ?>

            <h1>Oh no!</h1>
            <p>No content is appearing on this page!</p>

          <?php endif; ?>
        </div>
      </div>
    </div>

  </div>
</section>



<?php get_footer(); ?>
