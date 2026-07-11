<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
use Ruba\Utils\SpeakeasyMetadata;
class OrganizationsUpdateRequest
{
    /**
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     *
     * @var \Ruba\Models\Components\OrganizationUpdate $organizationUpdate
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\OrganizationUpdate $organizationUpdate;

    /**
     * @param  string  $id
     * @param  \Ruba\Models\Components\OrganizationUpdate  $organizationUpdate
     * @phpstan-pure
     */
    public function __construct(string $id, Components\OrganizationUpdate $organizationUpdate)
    {
        $this->id = $id;
        $this->organizationUpdate = $organizationUpdate;
    }
}