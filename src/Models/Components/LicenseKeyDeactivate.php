<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class LicenseKeyDeactivate
{
    /**
     *
     * @var string $key
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('key')]
    public string $key;

    /**
     *
     * @var string $organizationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('organization_id')]
    public string $organizationId;

    /**
     *
     * @var string $activationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('activation_id')]
    public string $activationId;

    /**
     * @param  string  $key
     * @param  string  $organizationId
     * @param  string  $activationId
     * @phpstan-pure
     */
    public function __construct(string $key, string $organizationId, string $activationId)
    {
        $this->key = $key;
        $this->organizationId = $organizationId;
        $this->activationId = $activationId;
    }
}