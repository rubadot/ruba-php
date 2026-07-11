<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum OrderBillingReason: string
{
    case Purchase = 'purchase';
    case SubscriptionCreate = 'subscription_create';
    case SubscriptionCycle = 'subscription_cycle';
    case SubscriptionUpdate = 'subscription_update';
}
