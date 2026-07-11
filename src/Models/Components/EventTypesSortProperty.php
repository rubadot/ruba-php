<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum EventTypesSortProperty: string
{
    case Name = 'name';
    case MinusName = '-name';
    case Label = 'label';
    case MinusLabel = '-label';
    case Occurrences = 'occurrences';
    case MinusOccurrences = '-occurrences';
    case FirstSeen = 'first_seen';
    case MinusFirstSeen = '-first_seen';
    case LastSeen = 'last_seen';
    case MinusLastSeen = '-last_seen';
}
