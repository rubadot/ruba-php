<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
use Ruba\Utils\SpeakeasyMetadata;
class CustomerPortalOrdersUpdateRequest
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
     * @var \Ruba\Models\Components\CustomerOrderUpdate $customerOrderUpdate
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\CustomerOrderUpdate $customerOrderUpdate;

    /**
     * @param  string  $id
     * @param  \Ruba\Models\Components\CustomerOrderUpdate  $customerOrderUpdate
     * @phpstan-pure
     */
    public function __construct(string $id, Components\CustomerOrderUpdate $customerOrderUpdate)
    {
        $this->id = $id;
        $this->customerOrderUpdate = $customerOrderUpdate;
    }
}