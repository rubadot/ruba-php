<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum RefundStatus: string
{
    case Pending = 'pending';
    case Succeeded = 'succeeded';
    case Failed = 'failed';
    case Canceled = 'canceled';
}
