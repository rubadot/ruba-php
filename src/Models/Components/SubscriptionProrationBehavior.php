<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum SubscriptionProrationBehavior: string
{
    case Invoice = 'invoice';
    case Prorate = 'prorate';
    case NextPeriod = 'next_period';
}
