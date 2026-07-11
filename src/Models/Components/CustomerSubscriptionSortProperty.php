<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum CustomerSubscriptionSortProperty: string
{
    case StartedAt = 'started_at';
    case MinusStartedAt = '-started_at';
    case Amount = 'amount';
    case MinusAmount = '-amount';
    case Status = 'status';
    case MinusStatus = '-status';
    case Organization = 'organization';
    case MinusOrganization = '-organization';
    case Product = 'product';
    case MinusProduct = '-product';
}
