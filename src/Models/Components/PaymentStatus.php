<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum PaymentStatus: string
{
    case Pending = 'pending';
    case Succeeded = 'succeeded';
    case Failed = 'failed';
}
