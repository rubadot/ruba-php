<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum ProductBillingType: string
{
    case OneTime = 'one_time';
    case Recurring = 'recurring';
}
