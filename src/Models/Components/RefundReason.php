<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum RefundReason: string
{
    case Duplicate = 'duplicate';
    case Fraudulent = 'fraudulent';
    case CustomerRequest = 'customer_request';
    case ServiceDisruption = 'service_disruption';
    case SatisfactionGuarantee = 'satisfaction_guarantee';
    case DisputePrevention = 'dispute_prevention';
    case Other = 'other';
}
