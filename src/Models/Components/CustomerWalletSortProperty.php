<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum CustomerWalletSortProperty: string
{
    case CreatedAt = 'created_at';
    case MinusCreatedAt = '-created_at';
    case Balance = 'balance';
    case MinusBalance = '-balance';
}
