<?php

declare(strict_types=1);

namespace Ruba\Models\Errors;

class AlreadyActiveSubscriptionErrorThrowable extends \RuntimeException
{
    public AlreadyActiveSubscriptionError $container;

    public function __construct(string $message, int $statusCode, AlreadyActiveSubscriptionError $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}