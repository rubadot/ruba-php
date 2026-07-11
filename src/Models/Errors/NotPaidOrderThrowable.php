<?php

declare(strict_types=1);

namespace Ruba\Models\Errors;

class NotPaidOrderThrowable extends \RuntimeException
{
    public NotPaidOrder $container;

    public function __construct(string $message, int $statusCode, NotPaidOrder $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}