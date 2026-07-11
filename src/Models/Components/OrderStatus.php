<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum OrderStatus: string
{
    case Pending = 'pending';
    case Paid = 'paid';
    case Refunded = 'refunded';
    case PartiallyRefunded = 'partially_refunded';
    case Void = 'void';
}
