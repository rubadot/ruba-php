<?php

declare(strict_types=1);

namespace Ruba\Models\Errors;

class OrderNotEligibleForRetryThrowable extends \RuntimeException
{
    public OrderNotEligibleForRetry $container;

    public function __construct(string $message, int $statusCode, OrderNotEligibleForRetry $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}