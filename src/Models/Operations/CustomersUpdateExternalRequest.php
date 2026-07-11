<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
use Ruba\Utils\SpeakeasyMetadata;
class CustomersUpdateExternalRequest
{
    /**
     * The customer external ID.
     *
     * @var string $externalId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=external_id')]
    public string $externalId;

    /**
     *
     * @var \Ruba\Models\Components\CustomerUpdateExternalID $customerUpdateExternalID
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\CustomerUpdateExternalID $customerUpdateExternalID;

    /**
     * @param  string  $externalId
     * @param  \Ruba\Models\Components\CustomerUpdateExternalID  $customerUpdateExternalID
     * @phpstan-pure
     */
    public function __construct(string $externalId, Components\CustomerUpdateExternalID $customerUpdateExternalID)
    {
        $this->externalId = $externalId;
        $this->customerUpdateExternalID = $customerUpdateExternalID;
    }
}