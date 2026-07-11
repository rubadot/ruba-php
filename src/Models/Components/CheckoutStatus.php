<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum CheckoutStatus: string
{
    case Open = 'open';
    case Expired = 'expired';
    case Confirmed = 'confirmed';
    case Succeeded = 'succeeded';
    case Failed = 'failed';
}
