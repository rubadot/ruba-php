<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
use Ruba\Utils\SpeakeasyMetadata;
class ProductsUpdateRequest
{
    /**
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     *
     * @var \Ruba\Models\Components\ProductUpdate $productUpdate
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\ProductUpdate $productUpdate;

    /**
     * @param  string  $id
     * @param  \Ruba\Models\Components\ProductUpdate  $productUpdate
     * @phpstan-pure
     */
    public function __construct(string $id, Components\ProductUpdate $productUpdate)
    {
        $this->id = $id;
        $this->productUpdate = $productUpdate;
    }
}