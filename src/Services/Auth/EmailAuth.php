<?php

namespace App\Services\Auth;

class EmailAuth extends AuthProvider {
    public function authenticate($username, $password) {
        // check if email and password are valid
        return true;
    }
}
