<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum SeatTierType: string
{
    case Volume = 'volume';
    case Graduated = 'graduated';
}
