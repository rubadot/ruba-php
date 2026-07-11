<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
use Ruba\Utils\SpeakeasyMetadata;
class CheckoutLinksUpdateRequest
{
    /**
     * The checkout link ID.
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     *
     * @var \Ruba\Models\Components\CheckoutLinkUpdate $checkoutLinkUpdate
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\CheckoutLinkUpdate $checkoutLinkUpdate;

    /**
     * @param  string  $id
     * @param  \Ruba\Models\Components\CheckoutLinkUpdate  $checkoutLinkUpdate
     * @phpstan-pure
     */
    public function __construct(string $id, Components\CheckoutLinkUpdate $checkoutLinkUpdate)
    {
        $this->id = $id;
        $this->checkoutLinkUpdate = $checkoutLinkUpdate;
    }
}