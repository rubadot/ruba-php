<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum Status: string
{
    case Active = 'active';
    case Trialing = 'trialing';
}
