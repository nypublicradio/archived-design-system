$(function() {
    
    // initiate smooth scroll on anchor links
        $('a').smoothScroll();
    
    
    
    // mobile nav button
        $('.btn_nav').on('click', function() {
            $('nav ul').toggleClass('active');
            $(this).toggleClass('active');
        });
    
    // when hitting links, make sure nav closes on mobile
        $('nav a').on('click', function() {
            $('nav ul').removeClass('active');
            $('.btn_nav').removeClass('active');
        });
    
    // nav "groups"
        var slug = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
        if( !slug || slug == '' ) {
            slug = 'home';
        }
        // auto-expand current group
            $('a[href=' + slug + ']').next('ul').addClass('expanded');
        // group expandsion behavior
            $('nav > ul > li > a').on('click', function(e) {
                if( $(this).attr('href') == slug ) {
                    e.preventDefault();
                }
                $(this).next('ul').toggleClass('expanded');
            });
    
    
    
    // copy to clipboard functionality
        var clipboard = new Clipboard('.btn_copy');
    
        clipboard.on('success', function(e) {
            // console.info('Action:', e.action);
            // console.info('Text:', e.text);
            // console.info('Trigger:', e.trigger);
            e.clearSelection();
        });
        
        clipboard.on('error', function(e) {
            // console.error('Action:', e.action);
            // console.error('Trigger:', e.trigger);
            $('#message').html('Press ⌘-C to copy to your clipboard.').addClass('visible');
            $(document).on('keyup', function() {
                $('#message').removeClass('visible');
                $(document).off( "keyup" );
            });
        });
        
        $('#message').on('click', function() {
            $('#message').removeClass('visible');
        });
    
});