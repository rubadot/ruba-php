<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class SeatClaim
{
    /**
     * Invitation token to claim the seat
     *
     * @var string $invitationToken
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('invitation_token')]
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