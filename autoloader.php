<?php
/**
 * autoloader for classes
 * requires classes/ folder and extension name .class.php
 */
spl_autoload_register( 'myAutoloader' );
function myAutoloader( $className ) {
    //path name
    $path = "classes/";
    //file extension name
    $extension = ".class.php";
    //full path name
    $fullPath = $path . $className . $extension;

    //if no file exists return false for easier error handling
    if( !file_exists( $fullPath ) ) {
        return false;
    }

    //require once to load in
    require_once( $fullPath );
}