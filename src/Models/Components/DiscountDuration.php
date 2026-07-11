<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum DiscountDuration: string
{
    case Once = 'once';
    case Forever = 'forever';
    case Repeating = 'repeating';
}
