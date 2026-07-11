<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
use Ruba\Utils\SpeakeasyMetadata;
class CustomerPortalMembersUpdateMemberRequest
{
    /**
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     *
     * @var \Ruba\Models\Components\CustomerPortalMemberUpdate $customerPortalMemberUpdate
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\CustomerPortalMemberUpdate $customerPortalMemberUpdate;

    /**
     * @param  string  $id
     * @param  \Ruba\Models\Components\CustomerPortalMemberUpdate  $customerPortalMemberUpdate
     * @phpstan-pure
     */
    public function __construct(string $id, Components\CustomerPortalMemberUpdate $customerPortalMemberUpdate)
    {
        $this->id = $id;
        $this->customerPortalMemberUpdate = $customerPortalMemberUpdate;
    }
}