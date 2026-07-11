<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum DisputeStatus: string
{
    case Prevented = 'prevented';
    case EarlyWarning = 'early_warning';
    case NeedsResponse = 'needs_response';
    case UnderReview = 'under_review';
    case Lost = 'lost';
    case Won = 'won';
}
