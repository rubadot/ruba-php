<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum SubscriptionRecurringInterval: string
{
    case Day = 'day';
    case Week = 'week';
    case Month = 'month';
    case Year = 'year';
}
