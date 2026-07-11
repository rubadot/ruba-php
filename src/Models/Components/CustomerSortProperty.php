<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum CustomerSortProperty: string
{
    case CreatedAt = 'created_at';
    case MinusCreatedAt = '-created_at';
    case Email = 'email';
    case MinusEmail = '-email';
    case Name = 'name';
    case MinusName = '-name';
}
