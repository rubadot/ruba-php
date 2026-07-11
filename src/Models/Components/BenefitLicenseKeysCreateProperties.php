<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class BenefitLicenseKeysCreateProperties
{
    /**
     *
     * @var ?string $prefix
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('prefix')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $prefix = null;

    /**
     *
     * @var ?\Ruba\Models\Components\BenefitLicenseKeyExpirationProperties $expires
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expires')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\BenefitLicenseKeyExpirationProperties|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?BenefitLicenseKeyExpirationProperties $expires = null;

    /**
     *
     * @var ?\Ruba\Models\Components\BenefitLicenseKeyActivationCreateProperties $activations
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('activations')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\BenefitLicenseKeyActivationCreateProperties|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?BenefitLicenseKeyActivationCreateProperties $activations = null;

    /**
     *
     * @var ?int $limitUsage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('limit_usage')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $limitUsage = null;

    /**
     * @param  ?string  $prefix
     * @param  ?\Ruba\Models\Components\BenefitLicenseKeyExpirationProperties  $expires
     * @param  ?\Ruba\Models\Components\BenefitLicenseKeyActivationCreateProperties  $activations
     * @param  ?int  $limitUsage
     * @phpstan-pure
     */
    public function __construct(?string $prefix = null, ?BenefitLicenseKeyExpirationProperties $expires = null, ?BenefitLicenseKeyActivationCreateProperties $activations = null, ?int $limitUsage = null)
    {
        $this->prefix = $prefix;
        $this->expires = $expires;
        $this->activations = $activations;
        $this->limitUsage = $limitUsage;
    }
}