<?php

declare(strict_types=1);

namespace Ruba\Models\Errors;

class HTTPValidationErrorThrowable extends \RuntimeException
{
    public HTTPValidationError $container;

    public function __construct(string $message, int $statusCode, HTTPValidationError $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}