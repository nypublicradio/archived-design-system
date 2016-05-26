<?php

/*
    We agreed that this project is a bit too simple to bother with a CMS.
    However, pretty URLs and good organization are always nice.
    
    This is a drop-dead simple "pretty URLs" system. 
    It depends on a simple .htaccess file with mod_rewrite enabled.
    
    Pages are located in the “pages” folder. 
    
    Common page components are in the “partials” folder.
    
    Easy peasy lemon squeezy
    
    Eric Jacobsen eric@wvgg.co 5/2016
*/

$request = $_SERVER['REQUEST_URI'];

if( $request == '/' ) {
    $request = '/home';
}

// download?
if( substr($request, 0, 9) == '/download' ) {
    require('download.php');
    exit();
}

$page = 'pages' . $request . '.php';

if( !file_exists($page) ) {
    // we could go to a 404 but what’s the point?
    header("location:/");
    exit();
}

require($page);