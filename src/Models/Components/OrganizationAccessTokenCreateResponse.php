<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class OrganizationAccessTokenCreateResponse
{
    /**
     *
     * @var \Ruba\Models\Components\OrganizationAccessToken $organizationAccessToken
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('organization_access_token')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\OrganizationAccessToken')]
    public OrganizationAccessToken $organizationAccessToken;

    /**
     *
     * @var string $token
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('token')]
    public string $token;

    /**
     * @param  \Ruba\Models\Components\OrganizationAccessToken  $organizationAccessToken
     * @param  string  $token
     * @phpstan-pure
     */
    public function __construct(OrganizationAccessToken $organizationAccessToken, string $token)
    {
        $this->organizationAccessToken = $organizationAccessToken;
        $this->token = $token;
    }
}