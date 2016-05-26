<?php

/*
    To make a file available for download, link to /download/path/to/filename.ext
    
    For example, to make a download link for our "main.css" file,
    link to /download/css/main.css
    
    Easy peasy lemon squeezy
    
    Eric Jacobsen eric@wvgg.co 5/2016
*/
    
$filename = $_SERVER['DOCUMENT_ROOT'] . str_replace('/download', null, $_SERVER['REQUEST_URI']);

if( file_exists($filename) ) {
    
    $quoted = sprintf('"%s"', addcslashes(basename($filename), '"\\'));
    $size   = filesize($filename);
    
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . $quoted); 
    header('Content-Transfer-Encoding: binary');
    header('Connection: Keep-Alive');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Length: ' . $size);
    
}