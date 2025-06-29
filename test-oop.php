<?php

require_once 'vendor/autoload.php';

// use App\Services\Logger\OrderProcessor;
// $orderProcessor = new OrderProcessor();
// $orderProcessor->processOrder();

// use App\Services\Order\OrderService;
// use App\Services\Payment\PaymentService;

// // Warning: Who owns $currentUser? OrderService or the trait?
// $orderService = new OrderService();
// $orderService->setUser('John Doe');
// echo $orderService->getCurrentUser();

// $paymentService = new PaymentService();
// $paymentService->setUser('Jane Doe');
// echo $paymentService->getCurrentUser();

// Fatal error: name collision
use App\Services\User\UserService;
$userService = new UserService();
echo $userService->getDbConnection();