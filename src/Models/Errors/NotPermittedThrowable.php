<?php

declare(strict_types=1);

namespace Ruba\Models\Errors;

class NotPermittedThrowable extends \RuntimeException
{
    public NotPermitted $container;

    public function __construct(string $message, int $statusCode, NotPermitted $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}