$(document).ready(function() {
    
    $(window).scroll(function() {
       if ($(this).scrollTop() > 1) {
           
           /* add header animation */
           $('header').addClass('scroll-nav scroll-animation');
           
           /* add hamburger icon animation */
           $('.hamburger-icon').addClass('scroll-icon');
           
       } else {
           
           /* remove header animation */
           $('header').removeClass('scroll-nav').addClass('scroll-animation');
           
           /* remove hamburger icon animation */
           $('.hamburger-icon').removeClass('scroll-icon').addClass('scroll-animation');
           
       }
    });
    
});