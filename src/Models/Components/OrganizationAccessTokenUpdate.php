<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class OrganizationAccessTokenUpdate
{
    /**
     *
     * @var ?string $comment
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('comment')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $comment = null;

    /**
     * $scopes
     *
     * @var ?array<\Ruba\Models\Components\AvailableScope> $scopes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('scopes')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Ruba\Models\Components\AvailableScope>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $scopes = null;

    /**
     * @param  ?string  $comment
     * @param  ?array<\Ruba\Models\Components\AvailableScope>  $scopes
     * @phpstan-pure
     */
    public function __construct(?string $comment = null, ?array $scopes = null)
    {
        $this->comment = $comment;
        $this->scopes = $scopes;
    }
}