<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum CustomFieldSortProperty: string
{
    case CreatedAt = 'created_at';
    case MinusCreatedAt = '-created_at';
    case Slug = 'slug';
    case MinusSlug = '-slug';
    case Name = 'name';
    case MinusName = '-name';
    case Type = 'type';
    case MinusType = '-type';
}
