<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum MeterSortProperty: string
{
    case CreatedAt = 'created_at';
    case MinusCreatedAt = '-created_at';
    case Name = 'name';
    case MinusName = '-name';
}
