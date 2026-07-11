<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
use Ruba\Utils\SpeakeasyMetadata;
class OrdersUpdateRequest
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
     * @var \Ruba\Models\Components\OrderUpdate $orderUpdate
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\OrderUpdate $orderUpdate;

    /**
     * @param  string  $id
     * @param  \Ruba\Models\Components\OrderUpdate  $orderUpdate
     * @phpstan-pure
     */
    public function __construct(string $id, Components\OrderUpdate $orderUpdate)
    {
        $this->id = $id;
        $this->orderUpdate = $orderUpdate;
    }
}