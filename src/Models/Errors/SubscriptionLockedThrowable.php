<?php

declare(strict_types=1);

namespace Ruba\Models\Errors;

class SubscriptionLockedThrowable extends \RuntimeException
{
    public SubscriptionLocked $container;

    public function __construct(string $message, int $statusCode, SubscriptionLocked $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}