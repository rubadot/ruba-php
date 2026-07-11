<?php

declare(strict_types=1);

namespace Ruba\Models\Errors;

class PaymentNotReadyThrowable extends \RuntimeException
{
    public PaymentNotReady $container;

    public function __construct(string $message, int $statusCode, PaymentNotReady $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}