<?php

/*

Template Name: Home Page

*/

?>


<?php get_header(); ?>


<section class="nyc-header Site-content" style="background-image: url(<?php the_field('header_background_image'); ?>);">
    <div class="container home-page">
      <div class="row">
        <div class="col-xs-12 col-md-8 clear-boot-padding">
          <div class="green-box">
            <p><?php the_field('green_box'); ?></p>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="home-page-wrap">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="home-page-copy center-block">
            <h2><?php the_field('heading'); ?></h2>
            <?php the_field('about_summary'); ?>
          </div>
        </div>
      </div>
    </div>
</section>

<?php get_footer(); ?>