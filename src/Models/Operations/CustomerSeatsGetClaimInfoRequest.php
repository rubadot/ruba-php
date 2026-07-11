<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Utils\SpeakeasyMetadata;
class CustomerSeatsGetClaimInfoRequest
{
    /**
     *
     * @var string $invitationToken
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=invitation_token')]
    public string $invitationToken;

    /**
     * @param  string  $invitationToken
     * @phpstan-pure
     */
    public function __construct(string $invitationToken)
    {
        $this->invitationToken = $invitationToken;
    }
}