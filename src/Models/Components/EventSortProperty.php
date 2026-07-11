<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum EventSortProperty: string
{
    case Timestamp = 'timestamp';
    case MinusTimestamp = '-timestamp';
}
