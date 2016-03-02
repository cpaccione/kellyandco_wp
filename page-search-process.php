<?php

/*

Template Name: Search Process

*/

?>


<?php get_header(); ?>

<section class="search-process-hero"></section>

<section class="search-process">
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
          <p>Our experiences indicates that the prospect of a successful hire is significantly enhanced when we collaborate with our clients in a well thought out and carefully defined process of search execution.</p>
          </div>
        </div>
      </div>
    </div>


          <?php if( have_rows('weeks') ): ?>

          <?php while( have_rows('weeks') ): the_row(); 

          //variables
          $number = get_sub_field('week_number');
          $heading = get_sub_field('week_heading');
          $summary = get_sub_field('week_summary');



          ?>

          <div class="row">
            <div class="search-process-wrap">

                <div class="col-sm-2 text-center">
                  <h3>WEEK</h3>
                  <div class="circle center-block"><?php echo $number; ?></div>
                </div>
                
                <div class="col-sm-10">
                  <h3><?php echo $heading; ?></h3>
                  <?php echo $summary; ?>
                </div>

              </div>
          </div>

        <?php endwhile; ?>

      <?php endif;?>




    
  </div> <!-- container close -->
</section>


<?php get_footer(); ?>