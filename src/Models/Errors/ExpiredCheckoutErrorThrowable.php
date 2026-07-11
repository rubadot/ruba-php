<?php

declare(strict_types=1);

namespace Ruba\Models\Errors;

class ExpiredCheckoutErrorThrowable extends \RuntimeException
{
    public ExpiredCheckoutError $container;

    public function __construct(string $message, int $statusCode, ExpiredCheckoutError $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}