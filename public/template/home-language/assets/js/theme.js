/*-----------------------------------------------------------------------------------
    
    Template Name: Sasly - Multipurpose Landing Page HTML Template
    URI: site.com 
    Description: Sasly is a flexible and professional Multipurpose HTML template, ideal for a variety of landing page needs including SaaS, software, fintech, Ai, E-learning, creative agencies, consulting services, software subscriptions, web applications, and digital marketing websites. Designed with all the essential elements to create an impactful landing page or corporate site, Sasly covers every detail to suit your business needs. We have included best practices of web development and you can create a great website layout based on Bootstrap or Grid 1320px.
    Author: Pixelfit
    Author URI: https://themeforest.net/user/pixelfit
    Version: 1.0 
    
-----------------------------------------------------------------------------------*/

(function($) {
    'use strict';

    function handleActiveClass() {
        // Check if the window width is greater than 991px
        if ($(window).width() > 991) {
            // Apply active class to the third item for larger screens
            if ($('.ef-testimonial-item').length) {
                $('.ef-testimonial-item').eq(2).addClass('active');

                $('.ef-testimonial-item').hover(
                    function () {
                        $('.ef-testimonial-item').removeClass('active');
                        $(this).addClass('active');
                    },
                    function () {
                        $('.ef-testimonial-item').removeClass('active');
                        $('.ef-testimonial-item').eq(2).addClass('active'); // Set the third card as active
                    }
                );
            }
        } else {
            // For screens smaller than or equal to 991px, remove the active class and disable hover functionality
            $('.ef-testimonial-item').removeClass('active');
            $('.ef-testimonial-item').off('mouseenter mouseleave'); // Disable hover functionality
        }
    }
    // Run the function on document load
    handleActiveClass();

    // Also check on window resize
    $(window).resize(function() {
        handleActiveClass();
    });

})(window.jQuery);