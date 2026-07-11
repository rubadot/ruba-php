<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
use Ruba\Utils\SpeakeasyMetadata;
class OrganizationAccessTokensUpdateRequest
{
    /**
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     *
     * @var \Ruba\Models\Components\OrganizationAccessTokenUpdate $organizationAccessTokenUpdate
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\OrganizationAccessTokenUpdate $organizationAccessTokenUpdate;

    /**
     * @param  string  $id
     * @param  \Ruba\Models\Components\OrganizationAccessTokenUpdate  $organizationAccessTokenUpdate
     * @phpstan-pure
     */
    public function __construct(string $id, Components\OrganizationAccessTokenUpdate $organizationAccessTokenUpdate)
    {
        $this->id = $id;
        $this->organizationAccessTokenUpdate = $organizationAccessTokenUpdate;
    }
}