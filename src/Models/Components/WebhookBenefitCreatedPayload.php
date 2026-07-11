<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/**
 * WebhookBenefitCreatedPayload - Sent when a new benefit is created.
 *
 *
 * **Discord & Slack support:** Basic
 */
class WebhookBenefitCreatedPayload
{
    /**
     *
     * @var \DateTime $timestamp
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('timestamp')]
    public \DateTime $timestamp;

    /**
     *
     * @var \Ruba\Models\Components\BenefitCustom|\Ruba\Models\Components\BenefitDiscord|\Ruba\Models\Components\BenefitGitHubRepository|\Ruba\Models\Components\BenefitDownloadables|\Ruba\Models\Components\BenefitLicenseKeys|\Ruba\Models\Components\BenefitMeterCredit|\Ruba\Models\Components\BenefitFeatureFlag $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\BenefitCustom|\Ruba\Models\Components\BenefitDiscord|\Ruba\Models\Components\BenefitGitHubRepository|\Ruba\Models\Components\BenefitDownloadables|\Ruba\Models\Components\BenefitLicenseKeys|\Ruba\Models\Components\BenefitMeterCredit|\Ruba\Models\Components\BenefitFeatureFlag')]
    #[\Speakeasy\Serializer\Annotation\UnionDiscriminator(field: 'type', map: ['custom' => '\Ruba\Models\Components\BenefitCustom', 'discord' => '\Ruba\Models\Components\BenefitDiscord', 'downloadables' => '\Ruba\Models\Components\BenefitDownloadables', 'feature_flag' => '\Ruba\Models\Components\BenefitFeatureFlag', 'github_repository' => '\Ruba\Models\Components\BenefitGitHubRepository', 'license_keys' => '\Ruba\Models\Components\BenefitLicenseKeys', 'meter_credit' => '\Ruba\Models\Components\BenefitMeterCredit'])]
    public BenefitCustom|BenefitDiscord|BenefitGitHubRepository|BenefitDownloadables|BenefitLicenseKeys|BenefitMeterCredit|BenefitFeatureFlag $data;

    /**
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     * @param  string  $type
     * @param  \DateTime  $timestamp
     * @param  \Ruba\Models\Components\BenefitCustom|\Ruba\Models\Components\BenefitDiscord|\Ruba\Models\Components\BenefitGitHubRepository|\Ruba\Models\Components\BenefitDownloadables|\Ruba\Models\Components\BenefitLicenseKeys|\Ruba\Models\Components\BenefitMeterCredit|\Ruba\Models\Components\BenefitFeatureFlag  $data
     * @phpstan-pure
     */
    public function __construct(\DateTime $timestamp, BenefitCustom|BenefitDiscord|BenefitGitHubRepository|BenefitDownloadables|BenefitLicenseKeys|BenefitMeterCredit|BenefitFeatureFlag $data, string $type = 'benefit.created')
    {
        $this->timestamp = $timestamp;
        $this->data = $data;
        $this->type = $type;
    }
}