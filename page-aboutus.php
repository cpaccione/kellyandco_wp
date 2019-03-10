<?php

/*

Template Name: About Us

*/

?>


<?php get_header(); ?>


<section class="aboutus-hero" style="background-image: url(<?php the_field('about_us_hero'); ?>);"></section>

<section class="about-us">
  <div class="container">

    <div class="row">
      <div class="col-sm-12">
        <div class="about-us-wrap">
          <div class="page-title">
            <h2 class="text-center"><?php the_title(); ?></h2>  
          </div>
          <?php the_field('page_copy'); ?>
        </div>
      </div>
    </div>

  </div>
</section>



<?php get_footer(); ?>
