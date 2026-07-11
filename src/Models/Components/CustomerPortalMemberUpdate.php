<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/** CustomerPortalMemberUpdate - Schema for updating a member's role in the customer portal. */
class CustomerPortalMemberUpdate
{
    /**
     * The new role for the member.
     *
     * @var ?\Ruba\Models\Components\MemberRole $role
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('role')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\MemberRole|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?MemberRole $role = null;

    /**
     * @param  ?\Ruba\Models\Components\MemberRole  $role
     * @phpstan-pure
     */
    public function __construct(?MemberRole $role = null)
    {
        $this->role = $role;
    }
}