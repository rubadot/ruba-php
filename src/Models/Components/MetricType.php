<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum MetricType: string
{
    case Scalar = 'scalar';
    case Currency = 'currency';
    case CurrencySubCent = 'currency_sub_cent';
    case Percentage = 'percentage';
}
