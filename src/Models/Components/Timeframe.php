<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum Timeframe: string
{
    case Year = 'year';
    case Month = 'month';
    case Day = 'day';
}
