<?php

/*

Template Name: Associations

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

	<div class="row">
		
		<div class="col-md-12">
	      
			<!-- Nav tabs -->
			<ul class="nav nav-pills nav-justified" role="tablist">
				
			    <li role="presentation" class="active">
			    	<a href="#home" aria-controls="home" role="tab" data-toggle="tab">HEALTH &amp; BENEFITS</a>
			    </li>
			    <li role="presentation">
			    	<a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">HUMAN RESOURCES</a>
			    </li>
			    <li role="presentation">
			    	<a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">RETIREMENT SERVICES</a>
			    </li>
			    
			</ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="home">

      <?php if( have_rows('health_and_benefits') ): ?>

          <?php while( have_rows('health_and_benefits') ): the_row(); 

          //variables
          $hb_link = get_sub_field('link');
          $hb_title = get_sub_field('link_title');
          $hb_summary = get_sub_field('link_summary');



          ?>

          <h3><a href="<?php echo $hb_link; ?>" target="_blank"><?php echo $hb_title; ?></a></h3>
          <p><?php echo $hb_summary; ?></p>

        <?php endwhile; ?>

      <?php endif;?>

    </div>
    <div role="tabpanel" class="tab-pane fade" id="profile">

      <?php if( have_rows('human_resources') ): ?>

          <?php while( have_rows('human_resources') ): the_row(); 

          //variables
          $hr_link = get_sub_field('link');
          $hr_title = get_sub_field('link_title');
          $hr_summary = get_sub_field('link_summary');



          ?>

          <h3><a href="<?php echo $hr_link; ?>" target="_blank"><?php echo $hr_title; ?></a></h3>
          <p><?php echo $hr_summary; ?></p>

        <?php endwhile; ?>

      <?php endif;?>

    </div>

    <div role="tabpanel" class="tab-pane fade" id="messages">
      
      <?php if( have_rows('retirement_services') ): ?>

          <?php while( have_rows('retirement_services') ): the_row(); 

          //variables
          $rt_link = get_sub_field('link');
          $rt_title = get_sub_field('link_title');
          $rt_summary = get_sub_field('link_summary');



          ?>

          <h3><a href="<?php echo $rt_link; ?>" target="_blank"><?php echo $rt_title; ?></a></h3>
          <p><?php echo $rt_summary; ?></p>

        <?php endwhile; ?>

      <?php endif;?>

    </div>
    
			</div> <!-- close tab content -->
		</div> <!-- close col-md-12 -->
	</div> <!-- close row -->

</div> <!-- close container -->


<?php get_footer(); ?>