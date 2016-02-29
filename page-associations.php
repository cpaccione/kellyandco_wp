<?php

/*

Template Name: Associations Template

*/

?>


<?php get_header(); ?>


<div class="container">

      <div class="row">
        <div class="col-md-12 text-center">
          <div class="page-title">
            <h2><?php the_title(); ?></h2>
          </div>
        </div>
      </div>

  <!-- Nav tabs -->
  <ul class="nav nav-pills nav-justified" role="tablist">
    <li role="presentation"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Health &amp; Benefits</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Human Resources</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Retirment Services</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade" id="home">

      <?php if( have_rows('health_and_benefits') ): ?>

          <?php while( have_rows('health_and_benefits') ): the_row(); 

          //variables
          $hb_link = get_sub_field('link');
          $hb_title = get_sub_field('link_title');
          $hb_summary = get_sub_field('link_summary');



          ?>

          <h3><a href="<?php echo $link; ?>"><?php echo $hb_title; ?></a></h3>
          <p><?php echo $hb_summary; ?></p>

        <?php endwhile; ?>

      <?php endif;?>

      <h3>Society of Actuaries (SOA)</h3>
      <p>An educational, research and professional membership organization dedicated to serving 20,000 actuarial members and the public in the United States and Canada. The SOA’s vision is for actuaries to be the leading professionals in the measurement and management of risk.</p>
    </div>
    <div role="tabpanel" class="tab-pane fade" id="profile">.</div>
    <div role="tabpanel" class="tab-pane fade" id="messages">...</div>
  </div>

</div>


<?php get_footer(); ?>