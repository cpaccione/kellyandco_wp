<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">

    <title>
      <?php wp_title( '|', true, 'right' ); ?>
      <?php bloginfo('name'); ?>
    </title>

    <?php wp_head(); ?>
  </head>

  <body>

<section class="one">
  	<div class="container main-nav-container">
	    <nav class="navbar navbar-default">
	      <div class="container-fluid">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/kellyLargeLogo01.png" alt="Kelly and Company"></a>
	        </div>
	        <div id="navbar" class="navbar-collapse collapse">
	          <?php
	              wp_nav_menu( array(
	                  'menu'              => 'primary',
	                  'theme_location'    => 'primary',
	                  'depth'             => 2,
	                  'menu_class'        => 'nav navbar-nav navbar-right',
	                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	                  'walker'            => new wp_bootstrap_navwalker())
	              );
	          ?>
	          </div><!--/.nav-collapse -->
	        </div>
	    </nav>
	</div>
</section>



