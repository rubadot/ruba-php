<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Utils\SpeakeasyMetadata;
class CustomerSeatsListSeatsRequest
{
    /**
     *
     * @var ?string $subscriptionId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=subscription_id')]
    public ?string $subscriptionId = null;

    /**
     *
     * @var ?string $orderId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=order_id')]
    public ?string $orderId = null;

    /**
     * @param  ?string  $subscriptionId
     * @param  ?string  $orderId
     * @phpstan-pure
     */
    public function __construct(?string $subscriptionId = null, ?string $orderId = null)
    {
        $this->subscriptionId = $subscriptionId;
        $this->orderId = $orderId;
    }
}