<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class AuthorizeResponseOrganization
{
    /**
     *
     * @var \Ruba\Models\Components\OAuth2ClientPublic $client
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('client')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\OAuth2ClientPublic')]
    public OAuth2ClientPublic $client;

    /**
     * $scopes
     *
     * @var array<\Ruba\Models\Components\Scope> $scopes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('scopes')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Ruba\Models\Components\Scope>')]
    public array $scopes;

    /**
     * $organizations
     *
     * @var array<\Ruba\Models\Components\AuthorizeOrganization> $organizations
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('organizations')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Ruba\Models\Components\AuthorizeOrganization>')]
    public array $organizations;

    /**
     *
     * @var ?\Ruba\Models\Components\AuthorizeOrganization $sub
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sub')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\AuthorizeOrganization|null')]
    public ?AuthorizeOrganization $sub;

    /**
     * $scopeDisplayNames
     *
     * @var ?array<string, string> $scopeDisplayNames
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('scope_display_names')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $scopeDisplayNames = null;

    /**
     *
     * @var string $subType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sub_type')]
    public string $subType;

    /**
     * @param  \Ruba\Models\Components\OAuth2ClientPublic  $client
     * @param  string  $subType
     * @param  array<\Ruba\Models\Components\Scope>  $scopes
     * @param  array<\Ruba\Models\Components\AuthorizeOrganization>  $organizations
     * @param  ?\Ruba\Models\Components\AuthorizeOrganization  $sub
     * @param  ?array<string, string>  $scopeDisplayNames
     * @phpstan-pure
     */
    public function __construct(OAuth2ClientPublic $client, array $scopes, array $organizations, ?AuthorizeOrganization $sub = null, ?array $scopeDisplayNames = null, string $subType = 'organization')
    {
        $this->client = $client;
        $this->scopes = $scopes;
        $this->organizations = $organizations;
        $this->sub = $sub;
        $this->scopeDisplayNames = $scopeDisplayNames;
        $this->subType = $subType;
    }
}