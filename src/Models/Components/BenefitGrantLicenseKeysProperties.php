<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class BenefitGrantLicenseKeysProperties
{
    /**
     *
     * @var ?string $userProvidedKey
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('user_provided_key')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $userProvidedKey = null;

    /**
     *
     * @var ?string $licenseKeyId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('license_key_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $licenseKeyId = null;

    /**
     *
     * @var ?string $displayKey
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('display_key')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $displayKey = null;

    /**
     * @param  ?string  $userProvidedKey
     * @param  ?string  $licenseKeyId
     * @param  ?string  $displayKey
     * @phpstan-pure
     */
    public function __construct(?string $userProvidedKey = null, ?string $licenseKeyId = null, ?string $displayKey = null)
    {
        $this->userProvidedKey = $userProvidedKey;
        $this->licenseKeyId = $licenseKeyId;
        $this->displayKey = $displayKey;
    }
}