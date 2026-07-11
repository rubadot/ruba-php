<?php


declare(strict_types=1);

namespace Ruba\Utils\Retry;

enum RetryStrategy: string
{
    case NONE = 'none';
    case BACKOFF = 'backoff';
}
