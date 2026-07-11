<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum SubType: string
{
    case User = 'user';
    case Organization = 'organization';
}
