<?php

/*

Template Name: Home Page

*/

?>


<?php get_header(); ?>

<section class="home-hero" style="background-image: url(<?php the_field('header_background_image'); ?>);">
  <div class="container-fluid">

      <div class="row">
        <div class="nyc-header">
            <div class="col-md-12">
              <ul class="adj-list fa-ul hide-hero">
                <li>Identification</li>
                <li>Recruitment</li>
                <li>Assessment</li>
                <li>Selection</li>
                <li>Transition</li>
                <li>Assimilation</li>
                <li>Retention</li>
              </ul>
            </div>
        </div>
      </div>

  </div>
</section>

<section class="stats">
  <div class="container">
    <div class="row">

      <div class="col-sm-4">
        <div class="stat-wraps">
        <h2>20+</h2>
        <p>Years of<br>
        filling searches.</p>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="stat-wraps">
          <h2>100%</h2>
          <p>Completion Rate</p>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="stat-wraps">
          <h2>90</h2>
          <p>Days to Search<br>
          Completion</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- <section class="nyc-header" style="background-image: url(<?php the_field('header_background_image'); ?>);">
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
</section> -->

<?php get_footer(); ?>
