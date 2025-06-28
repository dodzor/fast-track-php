<?php

// no manual includes
// no composer autoloader
// lazy loading: class is only loaded when needed
// clean code
// PSR-4 compliant
spl_autoload_register(function ($class){
    $baseDir = __DIR__ . '/src/';
    $prefix = 'App\\';

    if (strpos($class, $prefix) === 0) {
        $relativeClass = substr($class, strlen($prefix)); // remove prefix
        $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php'; // convert to path

        if (file_exists($file)) {
            require $file;
        }
    }
});
