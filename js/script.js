// Document, get ready...set...GO!!! WordPress safe jQuery wrapper.

jQuery(document).ready(function($) {


	// Add bootstrap's 'img-responsive' class to all images

    $('img').addClass('img-responsive');

    $('.svg').removeClass('img-responsive');

  // Animation for green text box on home page

    $('.green-box').addClass('visible animated slideInLeft');


  // tabs

    $('.nav-pills a').click(function (e) {
      
      e.preventDefault();
    
      $(this).tab('show');

    })

  // dropdown on hover

    $('.navbar [data-toggle="dropdown"]').bootstrapDropdownHover({
        
    });

});



