// Document, get ready...set...GO!!! WordPress safe jQuery wrapper.

jQuery(document).ready(function($) {

  // Fade in hero copy
  $('.adj-list').fadeIn(1500).removeClass('hide-hero');

	// Add bootstrap's 'img-responsive' class to all images

  $('img').addClass('img-responsive');
  $('.social img').removeClass('img-responsive');

  $('.svg').removeClass('img-responsive');

  // Animation for green text box on home page

  $('.green-box').addClass('visible animated slideInLeft');

  // tabs

  $('.nav-pills a').click(function (e) {

    e.preventDefault();

    $(this).tab('show');

  });

  // dropdown on hover

  $('.navbar [data-toggle="dropdown"]').bootstrapDropdownHover();

});
