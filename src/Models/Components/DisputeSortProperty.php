<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum DisputeSortProperty: string
{
    case CreatedAt = 'created_at';
    case MinusCreatedAt = '-created_at';
    case Amount = 'amount';
    case MinusAmount = '-amount';
}
