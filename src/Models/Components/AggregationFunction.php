<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum AggregationFunction: string
{
    case Count = 'count';
    case Sum = 'sum';
    case Max = 'max';
    case Min = 'min';
    case Avg = 'avg';
    case Unique = 'unique';
}
