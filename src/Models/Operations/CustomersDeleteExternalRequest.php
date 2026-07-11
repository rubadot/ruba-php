<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Utils\SpeakeasyMetadata;
class CustomersDeleteExternalRequest
{
    /**
     * The customer external ID.
     *
     * @var string $externalId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=external_id')]
    public string $externalId;

    /**
     * If true, also anonymize the customer's personal data for GDPR compliance.
     *
     * @var ?bool $anonymize
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=anonymize')]
    public ?bool $anonymize = null;

    /**
     * @param  string  $externalId
     * @param  ?bool  $anonymize
     * @phpstan-pure
     */
    public function __construct(string $externalId, ?bool $anonymize = false)
    {
        $this->externalId = $externalId;
        $this->anonymize = $anonymize;
    }
}