<?php

/*

Template Name: Clients Template

*/

?>


<?php get_header(); ?>

<section class="clients-hero"></section>

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
            <p>Our clients include a select group of Financial Services firms in the Retirement Services business, Employee Benefits Consulting & Administration firms, Human Resources Consulting & Administration firms, and Fortune 500 corporations. These clients appreciate the value of leadership and understand that investment in talent brings performance improvement. They include:</p>
            </div>
          </div>
        </div>
      </div>

      <div class="logo-wrapper">
        
      <?php if( have_rows('client_logo') ): ?>

        <?php while( have_rows('client_logo') ): the_row();

            //variables
            $image = get_sub_field('image');


          ?>

          <?php if($counter % 3 === 0) : echo '<div class="row">'; endif; ?>

            <div class="col-sm-4">
              <img class="center-block" src="<?php echo $image[url]; ?>" alt="<?php echo $image['alt'] ?>">
            </div>

        <?php $counter++; if($counter % 3 === 0) : echo '</div>'; endif; ?>
        
        <?php endwhile; ?>
      <?php endif; ?>

      </div>

  </div>
</section>


<?php get_footer(); ?>