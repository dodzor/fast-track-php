<?php 

namespace App\Services\Cache;

// No implementation
// Enforce implementation of methods
interface CacheInterface {
    public function get(string $key);
    public function set(string $key, $value);
    public function delete(string $key);
}
