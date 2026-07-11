<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
use Ruba\Utils\SpeakeasyMetadata;
class CheckoutsUpdateRequest
{
    /**
     * The checkout session ID.
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     *
     * @var \Ruba\Models\Components\CheckoutUpdate $checkoutUpdate
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\CheckoutUpdate $checkoutUpdate;

    /**
     * @param  string  $id
     * @param  \Ruba\Models\Components\CheckoutUpdate  $checkoutUpdate
     * @phpstan-pure
     */
    public function __construct(string $id, Components\CheckoutUpdate $checkoutUpdate)
    {
        $this->id = $id;
        $this->checkoutUpdate = $checkoutUpdate;
    }
}