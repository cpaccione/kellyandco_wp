// Document, get ready...set...GO!!! WordPress safe jQuery wrapper.

jQuery(document).ready(function($) {


	// Add bootstrap's 'img-responsive' class to all images

    $('img').addClass('img-responsive');

    $('.green-box').addClass('visible animated slideInLeft');

    // Smooth scroll function, use and id in the href and then place an id on the target you wish to scroll to.
    //Example: a href="#target">my link</a>  --> <h2 id="#target">Go Here</h2>

    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });


});



