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

    // Mobile Menu Toggle
    $('.mobile-menu-toggle').on('click', function() {
        $('body').addClass('mobile-menu-open');
        $('.mobile-menu-overlay').addClass('is-active');
    });

    $('.mobile-menu-close, .mobile-menu-overlay').on('click', function(e) {
        if (e.target === this) {
            $('body').removeClass('mobile-menu-open');
            $('.mobile-menu-overlay').removeClass('is-active');
        }
    });

    // Mobile submenu toggle
    $('.mobile-nav .has-submenu > a').on('click', function(e) {
        e.preventDefault();
        $(this).parent().toggleClass('is-open');
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
