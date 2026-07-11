<?php

declare(strict_types=1);

namespace Ruba\Models\Errors;

class UnauthorizedThrowable extends \RuntimeException
{
    public Unauthorized $container;

    public function __construct(string $message, int $statusCode, Unauthorized $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}