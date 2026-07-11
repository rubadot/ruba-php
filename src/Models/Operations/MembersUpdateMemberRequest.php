<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
use Ruba\Utils\SpeakeasyMetadata;
class MembersUpdateMemberRequest
{
    /**
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     *
     * @var \Ruba\Models\Components\MemberUpdate $memberUpdate
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\MemberUpdate $memberUpdate;

    /**
     * @param  string  $id
     * @param  \Ruba\Models\Components\MemberUpdate  $memberUpdate
     * @phpstan-pure
     */
    public function __construct(string $id, Components\MemberUpdate $memberUpdate)
    {
        $this->id = $id;
        $this->memberUpdate = $memberUpdate;
    }
}