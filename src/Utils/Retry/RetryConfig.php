<?php

declare(strict_types=1);

namespace Ruba\Utils\Retry;

abstract class RetryConfig
{
    public RetryStrategy $strategy;
}
