<?php

namespace App\Services\Cache;

class RedisCache implements CacheInterface {
    public function get(string $key) {
        return $key;
    }

    public function set(string $key, $value) {/* set value in redis */}

    public function delete(string $key) {/* delete value in redis */}
}
