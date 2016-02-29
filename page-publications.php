<?php

/*

Template Name: Publications Template

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
    <div role="tabpanel" class="tab-pane fade" id="home">...</div>
    <div role="tabpanel" class="tab-pane fade" id="profile">...</div>
    <div role="tabpanel" class="tab-pane fade" id="messages">...</div>
  </div>

</div>


<?php get_footer(); ?>