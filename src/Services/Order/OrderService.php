<?php

namespace App\Services\Order;

use App\Services\User\UserStateTrait;

class OrderService {
    use UserStateTrait;
    // Who owns $currentUser? OrderService or the trait?
}
