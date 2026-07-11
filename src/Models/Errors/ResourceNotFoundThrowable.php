<?php

declare(strict_types=1);

namespace Ruba\Models\Errors;

class ResourceNotFoundThrowable extends \RuntimeException
{
    public ResourceNotFound $container;

    public function __construct(string $message, int $statusCode, ResourceNotFound $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}