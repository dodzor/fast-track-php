<?php

namespace App\Monolog;

class Logger {
    public function log($message){
        echo "Monolog: $message\n";
    }
}
