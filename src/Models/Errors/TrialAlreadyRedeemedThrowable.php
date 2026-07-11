<?php

declare(strict_types=1);

namespace Ruba\Models\Errors;

class TrialAlreadyRedeemedThrowable extends \RuntimeException
{
    public TrialAlreadyRedeemed $container;

    public function __construct(string $message, int $statusCode, TrialAlreadyRedeemed $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}