<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum CheckoutSortProperty: string
{
    case CreatedAt = 'created_at';
    case MinusCreatedAt = '-created_at';
    case ExpiresAt = 'expires_at';
    case MinusExpiresAt = '-expires_at';
    case Status = 'status';
    case MinusStatus = '-status';
}
