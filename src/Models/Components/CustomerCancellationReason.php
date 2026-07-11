<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum CustomerCancellationReason: string
{
    case CustomerService = 'customer_service';
    case LowQuality = 'low_quality';
    case MissingFeatures = 'missing_features';
    case SwitchedService = 'switched_service';
    case TooComplex = 'too_complex';
    case TooExpensive = 'too_expensive';
    case Unused = 'unused';
    case Other = 'other';
}
