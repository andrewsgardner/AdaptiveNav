$(document).ready(function() {
    
    $(window).scroll(function() {
       if ($(this).scrollTop() > 1) {
           
           /* add header animation */
           $('header').addClass('scroll-nav scroll-animation');
           
           /* add hamburger icon trigger adjustment */
           $('.hamburgerTrigger').addClass('pushHamburgerIcon');
           
       } else {
           
           /* remove header animation */
           $('header').removeClass('scroll-nav').addClass('scroll-animation');
           
           /* remove hamburger icon trigger adjustment */
           $('.hamburgerTrigger').removeClass('pushHamburgerIcon').addClass('scroll-animation');
           
       }
    });
    
});