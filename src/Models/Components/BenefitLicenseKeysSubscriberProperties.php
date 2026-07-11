<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class BenefitLicenseKeysSubscriberProperties
{
    /**
     *
     * @var ?string $prefix
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('prefix')]
    public ?string $prefix;

    /**
     *
     * @var ?\Ruba\Models\Components\BenefitLicenseKeyExpirationProperties $expires
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expires')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\BenefitLicenseKeyExpirationProperties|null')]
    public ?BenefitLicenseKeyExpirationProperties $expires;

    /**
     *
     * @var ?\Ruba\Models\Components\BenefitLicenseKeyActivationProperties $activations
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('activations')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\BenefitLicenseKeyActivationProperties|null')]
    public ?BenefitLicenseKeyActivationProperties $activations;

    /**
     *
     * @var ?int $limitUsage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('limit_usage')]
    public ?int $limitUsage;

    /**
     * @param  ?string  $prefix
     * @param  ?\Ruba\Models\Components\BenefitLicenseKeyExpirationProperties  $expires
     * @param  ?\Ruba\Models\Components\BenefitLicenseKeyActivationProperties  $activations
     * @param  ?int  $limitUsage
     * @phpstan-pure
     */
    public function __construct(?string $prefix = null, ?BenefitLicenseKeyExpirationProperties $expires = null, ?BenefitLicenseKeyActivationProperties $activations = null, ?int $limitUsage = null)
    {
        $this->prefix = $prefix;
        $this->expires = $expires;
        $this->activations = $activations;
        $this->limitUsage = $limitUsage;
    }
}