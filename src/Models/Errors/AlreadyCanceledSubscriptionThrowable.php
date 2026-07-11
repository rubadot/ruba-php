<?php

declare(strict_types=1);

namespace Ruba\Models\Errors;

class AlreadyCanceledSubscriptionThrowable extends \RuntimeException
{
    public AlreadyCanceledSubscription $container;

    public function __construct(string $message, int $statusCode, AlreadyCanceledSubscription $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}