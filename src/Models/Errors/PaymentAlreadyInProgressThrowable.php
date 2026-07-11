<?php

declare(strict_types=1);

namespace Ruba\Models\Errors;

class PaymentAlreadyInProgressThrowable extends \RuntimeException
{
    public PaymentAlreadyInProgress $container;

    public function __construct(string $message, int $statusCode, PaymentAlreadyInProgress $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}