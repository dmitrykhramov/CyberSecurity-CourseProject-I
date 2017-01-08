<?php

// Function for auto connection classes
function __autoload($class_name)
{
    // List all the class directories in the array.
    $array_paths = array(
        '/models/',
        '/components/',
        '/controllers/',
        '/config/'
    );
    
    // Go through each ellement of an array
    foreach ($array_paths as $path) {
        
        // Form name and path to the file with the class
        $path = ROOT . $path . $class_name . '.php';
        
        // If this file exists connect it
        if (is_file($path)) {
            include_once $path;
        }
    }
    
}

