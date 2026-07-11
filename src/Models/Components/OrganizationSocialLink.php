<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class OrganizationSocialLink
{
    /**
     *
     * @var \Ruba\Models\Components\OrganizationSocialPlatforms $platform
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('platform')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\OrganizationSocialPlatforms')]
    public OrganizationSocialPlatforms $platform;

    /**
     * The URL to the organization profile
     *
     * @var string $url
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('url')]
    public string $url;

    /**
     * @param  \Ruba\Models\Components\OrganizationSocialPlatforms  $platform
     * @param  string  $url
     * @phpstan-pure
     */
    public function __construct(OrganizationSocialPlatforms $platform, string $url)
    {
        $this->platform = $platform;
        $this->url = $url;
    }
}