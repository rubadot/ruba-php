<?php

declare(strict_types=1);

namespace Ruba\Models\Errors;

class PaymentMethodInUseByActiveSubscriptionThrowable extends \RuntimeException
{
    public PaymentMethodInUseByActiveSubscription $container;

    public function __construct(string $message, int $statusCode, PaymentMethodInUseByActiveSubscription $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}