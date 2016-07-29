$(document).ready(function() {
    
    $('.hamburgerTrigger').click(function() {
        
        /* render hamburger icon */
        $('nav.primary-menu ul').slideToggle();
        
        /* center logo on click */
        $('.logo').toggleClass('pushLogo');
        
    });
    
});