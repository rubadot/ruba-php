<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum SeatStatus: string
{
    case Pending = 'pending';
    case Claimed = 'claimed';
    case Revoked = 'revoked';
}
