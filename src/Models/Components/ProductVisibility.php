<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum ProductVisibility: string
{
    case Draft = 'draft';
    case Private = 'private';
    case Public = 'public';
}
