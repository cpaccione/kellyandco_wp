<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the <section class="one"></section>.
 *
 * @package WordPress
 * @subpackage KellyandCo
 *
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>

    <script>

	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-47419538-1', 'kellyandco.com');
	  ga('send', 'pageview');

	</script>

  </head>

  <body>
  <script type="text/javascript" src="https://secure.hall3hook.com/js/198888.js" ></script>
  <noscript><img alt="" src="https://secure.hall3hook.com/198888.png" style="display:none;" /></noscript>

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
	          <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/KellyCompany-logo.svg" alt="Kelly and Company"></a>
	        </div>
	        <div id="navbar" class="navbar-collapse collapse">
	          <?php
	              wp_nav_menu( array(
	                  'menu'              => 'primary',
	                  'theme_location'    => 'primary',
	                  'depth'             => 2,
					  'menu_class'        => 'nav navbar-nav navbar-right',
					  'menu_id'			  => 'menu-main-navigation',
	                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	                  'walker'            => new wp_bootstrap_navwalker())
	              );
	          ?>
	          </div><!--/.nav-collapse -->
	        </div>
	    </nav>
	</div>
</section>



