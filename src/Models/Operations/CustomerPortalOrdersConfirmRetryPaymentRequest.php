<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
use Ruba\Utils\SpeakeasyMetadata;
class CustomerPortalOrdersConfirmRetryPaymentRequest
{
    /**
     * The order ID.
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     *
     * @var \Ruba\Models\Components\CustomerOrderConfirmPayment $customerOrderConfirmPayment
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\CustomerOrderConfirmPayment $customerOrderConfirmPayment;

    /**
     * @param  string  $id
     * @param  \Ruba\Models\Components\CustomerOrderConfirmPayment  $customerOrderConfirmPayment
     * @phpstan-pure
     */
    public function __construct(string $id, Components\CustomerOrderConfirmPayment $customerOrderConfirmPayment)
    {
        $this->id = $id;
        $this->customerOrderConfirmPayment = $customerOrderConfirmPayment;
    }
}