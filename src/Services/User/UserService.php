<?php

namespace App\Services\User;

use App\Services\Database\DatabaseTrait;    
use App\Services\Cache\CacheTrait;

class UserService {
    use DatabaseTrait, CacheTrait;

    public function getUser() {
        return 'User';
    }
}
