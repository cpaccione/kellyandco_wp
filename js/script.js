// Document, get ready...set...GO!!! WordPress safe jQuery wrapper.

jQuery(document).ready(function($) {


	// Add bootstrap's 'img-responsive' class to all images

    $('img').addClass('img-responsive');

  // Animation for green text box on home page

    $('.green-box').addClass('visible animated slideInLeft');


    $('.nav-pills a').click(function (e) {
      
      e.preventDefault();
    
      $(this).tab('show');

    })

    $('.navbar [data-toggle="dropdown"]').bootstrapDropdownHover({
        
    });

});



