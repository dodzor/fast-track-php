<?php

namespace App\Services\Payment;

use App\Services\User\UserStateTrait;

class PaymentService {
    use UserStateTrait;
    // Now we have duplicate state across services!
}