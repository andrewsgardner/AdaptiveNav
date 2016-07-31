/* bind .ready() and .resize() */
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