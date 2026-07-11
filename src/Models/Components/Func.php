<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum Func: string
{
    case Sum = 'sum';
    case Max = 'max';
    case Min = 'min';
    case Avg = 'avg';
}
