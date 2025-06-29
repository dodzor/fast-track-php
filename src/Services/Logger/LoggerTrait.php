<?php

namespace App\Services\Logger;

trait LoggerTrait {
    public function log(string $message) {
        echo "Logger: $message\n";
    }
}

