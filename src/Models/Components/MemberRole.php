<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum MemberRole: string
{
    case Owner = 'owner';
    case BillingManager = 'billing_manager';
    case Member = 'member';
}
