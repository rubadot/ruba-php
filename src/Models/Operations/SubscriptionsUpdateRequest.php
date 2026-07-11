<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
use Ruba\Utils\SpeakeasyMetadata;
class SubscriptionsUpdateRequest
{
    /**
     * The subscription ID.
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     *
     * @var \Ruba\Models\Components\SubscriptionUpdateProduct|\Ruba\Models\Components\SubscriptionUpdateDiscount|\Ruba\Models\Components\SubscriptionUpdateTrial|\Ruba\Models\Components\SubscriptionUpdateSeats|\Ruba\Models\Components\SubscriptionUpdateBillingPeriod|\Ruba\Models\Components\SubscriptionCancel|\Ruba\Models\Components\SubscriptionRevoke $subscriptionUpdate
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\SubscriptionUpdateProduct|Components\SubscriptionUpdateDiscount|Components\SubscriptionUpdateTrial|Components\SubscriptionUpdateSeats|Components\SubscriptionUpdateBillingPeriod|Components\SubscriptionCancel|Components\SubscriptionRevoke $subscriptionUpdate;

    /**
     * @param  string  $id
     * @param  \Ruba\Models\Components\SubscriptionUpdateProduct|\Ruba\Models\Components\SubscriptionUpdateDiscount|\Ruba\Models\Components\SubscriptionUpdateTrial|\Ruba\Models\Components\SubscriptionUpdateSeats|\Ruba\Models\Components\SubscriptionUpdateBillingPeriod|\Ruba\Models\Components\SubscriptionCancel|\Ruba\Models\Components\SubscriptionRevoke  $subscriptionUpdate
     * @phpstan-pure
     */
    public function __construct(string $id, Components\SubscriptionUpdateProduct|Components\SubscriptionUpdateDiscount|Components\SubscriptionUpdateTrial|Components\SubscriptionUpdateSeats|Components\SubscriptionUpdateBillingPeriod|Components\SubscriptionCancel|Components\SubscriptionRevoke $subscriptionUpdate)
    {
        $this->id = $id;
        $this->subscriptionUpdate = $subscriptionUpdate;
    }
}