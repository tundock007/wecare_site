/**
 * WeCare Theme JavaScript
 */

(function($) {
    'use strict';

    // Header scroll effect
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.site-header').addClass('is-scrolled');
        } else {
            $('.site-header').removeClass('is-scrolled');
        }
    });

    // Smooth scroll for anchor links
    $('a[href^="#"]').on('click', function(e) {
        var target = $(this.getAttribute('href'));
        if (target.length) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top - 80
            }, 800);
        }
    });

    // Animate service cards on scroll
    $(window).scroll(function() {
        $('.service-card').each(function() {
            var position = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            
            if (scroll + windowHeight > position + 100) {
                $(this).addClass('is-visible');
            }
        });
    });

})(jQuery);
