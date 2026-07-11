<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum TimeInterval: string
{
    case Year = 'year';
    case Month = 'month';
    case Week = 'week';
    case Day = 'day';
    case Hour = 'hour';
}
