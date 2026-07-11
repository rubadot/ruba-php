<?php

declare(strict_types=1);

namespace Ruba\Models\Errors;

class NotOpenCheckoutThrowable extends \RuntimeException
{
    public NotOpenCheckout $container;

    public function __construct(string $message, int $statusCode, NotOpenCheckout $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}