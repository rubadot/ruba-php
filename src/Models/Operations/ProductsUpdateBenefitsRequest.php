<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
use Ruba\Utils\SpeakeasyMetadata;
class ProductsUpdateBenefitsRequest
{
    /**
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     *
     * @var \Ruba\Models\Components\ProductBenefitsUpdate $productBenefitsUpdate
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\ProductBenefitsUpdate $productBenefitsUpdate;

    /**
     * @param  string  $id
     * @param  \Ruba\Models\Components\ProductBenefitsUpdate  $productBenefitsUpdate
     * @phpstan-pure
     */
    public function __construct(string $id, Components\ProductBenefitsUpdate $productBenefitsUpdate)
    {
        $this->id = $id;
        $this->productBenefitsUpdate = $productBenefitsUpdate;
    }
}