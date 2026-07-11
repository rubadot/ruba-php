<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum TaxBehaviorOption: string
{
    case Location = 'location';
    case Inclusive = 'inclusive';
    case Exclusive = 'exclusive';
}
