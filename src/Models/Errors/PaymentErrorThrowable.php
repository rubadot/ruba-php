<?php

declare(strict_types=1);

namespace Ruba\Models\Errors;

class PaymentErrorThrowable extends \RuntimeException
{
    public PaymentError $container;

    public function __construct(string $message, int $statusCode, PaymentError $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}