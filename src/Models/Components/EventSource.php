<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum EventSource: string
{
    case System = 'system';
    case User = 'user';
}
