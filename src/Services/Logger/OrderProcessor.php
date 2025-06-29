<?php

namespace App\Services\Logger;

class OrderProcessor {
    use LoggerTrait;

    public function processOrder() {
        $this->log('Processing order');
    }
}
