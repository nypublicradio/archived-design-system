$(function() {
    

    // initiate smooth scroll on anchor links
        $('a').smoothScroll();
    // nav "groups"
        var slug = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
        if( !slug || slug == '' ) {
            slug = 'home';
        }
        // auto-expand current group
            $('a[href=' + slug + ']').next('ul').addClass('expanded');
        // group expansion behavior
            $('nav > ul > li > a').on('click', function(e) {
                if( $(this).attr('href') == slug ) {
                    e.preventDefault();
                }
                $('#page_tree ul').removeClass('expanded');
                $(this).next('ul').toggleClass('expanded');
            });
    $('#page_tree a').on('click', function() {
        $('a').removeClass('active');
        $(this).addClass('active');
    });

    
        
    
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
    
    
    // initialize "inline swatches" 
        $('.inline_swatch').each(function(i,n) {
            $(this).html('<div class="swatch ' + $(this).data('color') + ' background"></div>' +
                            '<ul>' +
                                '<li class="copyable" data-clipboard-target="#copy-inline-color-' + i + '" id="copy-inline-color-' + i + '">.' + $(this).data('color') + '</li>' +
                                '<li class="copyable" data-clipboard-target="#copy-inline-hex-' + i + '"   id="copy-inline-hex-' + i + '"  >#' + $(this).data('hex') + '</li>' +
                                '<li class="copyable" data-clipboard-target="#copy-inline-rgba-' + i + '"  id="copy-inline-rgba-' + i + '" >rgba(' + $(this).data('rgba') + ')</li>' +
                            '</ul>'
                            );
        });
    
    // copy to clipboard functionality
        var clipboard = new Clipboard('.copyable');
    
        clipboard.on('success', function(e) {
            // console.info('Action:', e.action);
            // console.info('Text:', e.text);
            // console.info('Trigger:', e.trigger);
            e.clearSelection();
            $('#message').html('Copied!').addClass('visible');
            setTimeout(function() {
                dismiss_message();
            }, 5000);
        });
        
        clipboard.on('error', function(e) {
            // console.error('Action:', e.action);
            // console.error('Trigger:', e.trigger);
            $('#message').html('Press ⌘-C to copy to your clipboard.').addClass('visible');
            $(document).on('keyup', function() {
                dismiss_message();
            });
            $(document).on('mouseup', function() {
                dismiss_message();
            });
        });
        
        var dismiss_message = function() {
            $('#message').removeClass('visible');
            $(document).off( "keyup" );
            $(document).off( "click" );
        }
    

});