<?php

declare(strict_types=1);

namespace Ruba\Models\Errors;

class CustomerNotReadyThrowable extends \RuntimeException
{
    public CustomerNotReady $container;

    public function __construct(string $message, int $statusCode, CustomerNotReady $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}