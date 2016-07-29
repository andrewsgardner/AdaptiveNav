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
    
});;
$(document).ready(function() {
    
    $('.hamburgerTrigger').click(function() {
        
        /* render hamburger icon */
        $('nav.primary-menu ul').slideToggle();
        
        /* center logo on click */
        $('.logo').toggleClass('pushLogo');
        
    });
    
});;
/* bind .ready() and .resize() */
(function() {
    function onReadyResize() {
        
        if ($(window).width() <= 767) {
            
            /* remove mobile header styles when switching back to desktop mode */
            $('nav.primary-menu ul').removeAttr('style');
            
        }
        
    }
        
    $(window).on('resize', onReadyResize);
    $(document).on('ready', onReadyResize);
})();