<?php

namespace App\Services\User;

// Why using traits to manage state is an anti-pattern
// 1. Hidden state & unclear ownership 
trait UserStateTrait {
    private $currentUser;
    private $isLoggedIn = false;

    public function setUser(string $user) {
        $this->currentUser = $user;
        $this->isLoggedIn = true;
    }

    public function getCurrentUser() {
        return $this->currentUser;
    }
}
