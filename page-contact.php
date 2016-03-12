<?php

/*

Template Name: Contact

*/

?>


<?php get_header(); ?>

<section class="contact-hero" style="background-image: url(<?php the_field('header_background_image'); ?>);"></section>

<section class="contact-body site-content">
  <div class="container text-center">

      <div class="row">
        <div class="page-title">
          <div class="col-md-12">
            <h2><?php the_title(); ?></h2>
          </div>
        </div>
      </div>

      <div class="row">
          <div class="col-sm-6">
            <h5>1350 Avenue of the Americas, Fl 2<br>
            New York, NY 10019</h5>
          </div>

          <div class="col-sm-6">
            <h5>15 New England Executive Office Park<br>
            Burlington, MA 01803</h5>
          </div>
      </div>

      <div class="row">
        <div class="col-sm-12">
          <h5><a href="mailto:info@kellyandco.com"><i class="fa fa-envelope-o fa-large"></i> info@Kellyandco.com</a></h5>
        </div>
      </div>

    </div>
</section>

<?php get_footer('empty'); ?>