<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum DiscountType: string
{
    case Fixed = 'fixed';
    case Percentage = 'percentage';
}
