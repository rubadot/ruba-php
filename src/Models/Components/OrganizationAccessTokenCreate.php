<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class OrganizationAccessTokenCreate
{
    /**
     *
     * @var string $comment
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('comment')]
    public string $comment;

    /**
     * $scopes
     *
     * @var array<\Ruba\Models\Components\AvailableScope> $scopes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('scopes')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Ruba\Models\Components\AvailableScope>')]
    public array $scopes;

    /**
     *
     * @var ?string $organizationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('organization_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $organizationId = null;

    /**
     *
     * @var ?string $expiresIn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expires_in')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $expiresIn = null;

    /**
     * @param  string  $comment
     * @param  array<\Ruba\Models\Components\AvailableScope>  $scopes
     * @param  ?string  $organizationId
     * @param  ?string  $expiresIn
     * @phpstan-pure
     */
    public function __construct(string $comment, array $scopes, ?string $organizationId = null, ?string $expiresIn = null)
    {
        $this->comment = $comment;
        $this->scopes = $scopes;
        $this->organizationId = $organizationId;
        $this->expiresIn = $expiresIn;
    }
}