<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum CustomerType: string
{
    case Individual = 'individual';
    case Team = 'team';
}
