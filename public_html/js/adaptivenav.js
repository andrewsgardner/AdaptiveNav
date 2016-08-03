$(document).ready(function() {
    
    $('.hamburgerTrigger').click(function() {
        
        /* render hamburger icon */
        $('nav.primary-menu ul').slideToggle();
        
        /* center logo on click */
        $('.logo').toggleClass('pushLogo');
        
    });
    
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
    
});;/* bind .ready() and .resize() */
(function() {
    function onReadyResize() {
        
        if ($(window).width() <= 767) {
            
            /* remove mobile header styles when switching back to desktop mode */
            $('nav.primary-menu ul').removeAttr('style');
            
            /* force uncentering of logo when switching back to desktop mode */
            $('.logo').removeClass('pushLogo');
            
        }
        
    }
        
    $(window).on('resize', onReadyResize);
    $(document).on('ready', onReadyResize);
})();