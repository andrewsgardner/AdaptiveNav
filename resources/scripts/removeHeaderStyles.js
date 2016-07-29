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