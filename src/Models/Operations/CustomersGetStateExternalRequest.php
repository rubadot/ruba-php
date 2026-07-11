<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Utils\SpeakeasyMetadata;
class CustomersGetStateExternalRequest
{
    /**
     * The customer external ID.
     *
     * @var string $externalId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=external_id')]
    public string $externalId;

    /**
     * @param  string  $externalId
     * @phpstan-pure
     */
    public function __construct(string $externalId)
    {
        $this->externalId = $externalId;
    }
}