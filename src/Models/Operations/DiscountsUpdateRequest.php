<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
use Ruba\Utils\SpeakeasyMetadata;
class DiscountsUpdateRequest
{
    /**
     * The discount ID.
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     *
     * @var \Ruba\Models\Components\DiscountUpdate $discountUpdate
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\DiscountUpdate $discountUpdate;

    /**
     * @param  string  $id
     * @param  \Ruba\Models\Components\DiscountUpdate  $discountUpdate
     * @phpstan-pure
     */
    public function __construct(string $id, Components\DiscountUpdate $discountUpdate)
    {
        $this->id = $id;
        $this->discountUpdate = $discountUpdate;
    }
}