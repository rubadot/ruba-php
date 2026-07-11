<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
use Ruba\Utils\SpeakeasyMetadata;
class CustomersUpdateRequest
{
    /**
     * The customer ID.
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     *
     * @var \Ruba\Models\Components\CustomerUpdate $customerUpdate
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\CustomerUpdate $customerUpdate;

    /**
     * @param  string  $id
     * @param  \Ruba\Models\Components\CustomerUpdate  $customerUpdate
     * @phpstan-pure
     */
    public function __construct(string $id, Components\CustomerUpdate $customerUpdate)
    {
        $this->id = $id;
        $this->customerUpdate = $customerUpdate;
    }
}