
    // Initialize each block on page load (front end).
    jQuery(document).ready(function($){

        $(".t-slider").slick({
            mobileFirst: true,
            dots: true,
            arrows: true,
            infinite: true,
            autoplay: true,
            adaptiveHeight: true,
            speed: 500,
            cssEase: 'linear',
            responsive: [
                {
                    breakpoint: 0,
                    settings: {
                        arrows: false,
                        dots: true
                    }
                },
                {
                    breakpoint: 800,
                    settings: {
                        arrows: false,
                        dots: true
                    }
                },
                {
                    breakpoint: 1200,
                    settings: {
                        arrows: true,
                        dots: false
                    }
                },
            ]
            }
        );
    });
