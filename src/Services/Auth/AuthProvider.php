<?php

namespace App\Services\Auth;

// Cannot be instantiated
// Provides a partial implementation and enforces subclass to override abstract methods
abstract class AuthProvider {
    abstract public function authenticate($username, $password);

    public function getUser() {
        return 'John Doe';
    }
}
