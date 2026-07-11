<?php

declare(strict_types=1);

namespace Ruba\Models\Errors;

class PaymentFailedThrowable extends \RuntimeException
{
    public PaymentFailed $container;

    public function __construct(string $message, int $statusCode, PaymentFailed $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}