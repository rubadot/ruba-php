<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
use Ruba\Utils\SpeakeasyMetadata;
class CustomerPortalSubscriptionsUpdateRequest
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
     * @var \Ruba\Models\Components\CustomerSubscriptionUpdateProduct|\Ruba\Models\Components\CustomerSubscriptionUpdateSeats|\Ruba\Models\Components\CustomerSubscriptionCancel $customerSubscriptionUpdate
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\CustomerSubscriptionUpdateProduct|Components\CustomerSubscriptionUpdateSeats|Components\CustomerSubscriptionCancel $customerSubscriptionUpdate;

    /**
     * @param  string  $id
     * @param  \Ruba\Models\Components\CustomerSubscriptionUpdateProduct|\Ruba\Models\Components\CustomerSubscriptionUpdateSeats|\Ruba\Models\Components\CustomerSubscriptionCancel  $customerSubscriptionUpdate
     * @phpstan-pure
     */
    public function __construct(string $id, Components\CustomerSubscriptionUpdateProduct|Components\CustomerSubscriptionUpdateSeats|Components\CustomerSubscriptionCancel $customerSubscriptionUpdate)
    {
        $this->id = $id;
        $this->customerSubscriptionUpdate = $customerSubscriptionUpdate;
    }
}