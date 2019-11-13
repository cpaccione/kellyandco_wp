<?php

/*

Template Name: Clients Template

*/

$counter = 0;

?>


<?php get_header(); ?>

<section class="clients-hero" style="background-image: url(<?php the_field('header_background_image'); ?>);"></section>

<section class="client-logos">
  <div class="container">

      <div class="row">
        <div class="col-md-12 text-center">
          <div class="page-title">
            <h2><?php the_title(); ?></h2>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="green-copy-box">
            <div class="green-copy-wrap">
            <p><?php the_field('green_box'); ?></p>
            </div>
          </div>
        </div>
      </div>

      <div class="logo-wrapper">

        <?php if( have_rows('client_logo') ): ?>

          <?php while( have_rows('client_logo') ): the_row();

              //variables
              $clientImage = get_sub_field('clientimage');

            ?>

              <div class="col">
                <img class="center-block client-logo" src="<?php echo $clientImage['url']; ?>" alt="<?php echo $clientImage['alt']; ?>">
              </div>

          <?php endwhile; ?>
          
        <?php endif; ?>

      </div>

  </div>
</section>


<?php get_footer(); ?>
