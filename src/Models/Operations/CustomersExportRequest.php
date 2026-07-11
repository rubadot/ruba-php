<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Utils\SpeakeasyMetadata;
class CustomersExportRequest
{
    /**
     * Filter by organization ID.
     *
     * @var string|array<string>|null $organizationId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=organization_id')]
    public string|array|null $organizationId = null;

    /**
     * @param  string|array<string>|null  $organizationId
     * @phpstan-pure
     */
    public function __construct(string|array|null $organizationId = null)
    {
        $this->organizationId = $organizationId;
    }
}