<?php

declare(strict_types=1);

namespace Ruba\Models\Errors;

class RefundedAlreadyThrowable extends \RuntimeException
{
    public RefundedAlready $container;

    public function __construct(string $message, int $statusCode, RefundedAlready $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}