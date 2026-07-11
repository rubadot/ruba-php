<?php

declare(strict_types=1);

namespace Ruba\Models\Errors;

class MissingInvoiceBillingDetailsThrowable extends \RuntimeException
{
    public MissingInvoiceBillingDetails $container;

    public function __construct(string $message, int $statusCode, MissingInvoiceBillingDetails $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}