<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum MemberSortProperty: string
{
    case CreatedAt = 'created_at';
    case MinusCreatedAt = '-created_at';
}
