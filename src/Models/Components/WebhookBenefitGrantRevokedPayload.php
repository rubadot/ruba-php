<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/**
 * WebhookBenefitGrantRevokedPayload - Sent when a benefit grant is revoked.
 *
 *
 * **Discord & Slack support:** Basic
 */
class WebhookBenefitGrantRevokedPayload
{
    /**
     *
     * @var \DateTime $timestamp
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('timestamp')]
    public \DateTime $timestamp;

    /**
     *
     * @var \Ruba\Models\Components\BenefitGrantDiscordWebhook|\Ruba\Models\Components\BenefitGrantCustomWebhook|\Ruba\Models\Components\BenefitGrantGitHubRepositoryWebhook|\Ruba\Models\Components\BenefitGrantDownloadablesWebhook|\Ruba\Models\Components\BenefitGrantLicenseKeysWebhook|\Ruba\Models\Components\BenefitGrantMeterCreditWebhook|\Ruba\Models\Components\BenefitGrantFeatureFlagWebhook $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\BenefitGrantDiscordWebhook|\Ruba\Models\Components\BenefitGrantCustomWebhook|\Ruba\Models\Components\BenefitGrantGitHubRepositoryWebhook|\Ruba\Models\Components\BenefitGrantDownloadablesWebhook|\Ruba\Models\Components\BenefitGrantLicenseKeysWebhook|\Ruba\Models\Components\BenefitGrantMeterCreditWebhook|\Ruba\Models\Components\BenefitGrantFeatureFlagWebhook')]
    public BenefitGrantDiscordWebhook|BenefitGrantCustomWebhook|BenefitGrantGitHubRepositoryWebhook|BenefitGrantDownloadablesWebhook|BenefitGrantLicenseKeysWebhook|BenefitGrantMeterCreditWebhook|BenefitGrantFeatureFlagWebhook $data;

    /**
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     * @param  string  $type
     * @param  \DateTime  $timestamp
     * @param  \Ruba\Models\Components\BenefitGrantDiscordWebhook|\Ruba\Models\Components\BenefitGrantCustomWebhook|\Ruba\Models\Components\BenefitGrantGitHubRepositoryWebhook|\Ruba\Models\Components\BenefitGrantDownloadablesWebhook|\Ruba\Models\Components\BenefitGrantLicenseKeysWebhook|\Ruba\Models\Components\BenefitGrantMeterCreditWebhook|\Ruba\Models\Components\BenefitGrantFeatureFlagWebhook  $data
     * @phpstan-pure
     */
    public function __construct(\DateTime $timestamp, BenefitGrantDiscordWebhook|BenefitGrantCustomWebhook|BenefitGrantGitHubRepositoryWebhook|BenefitGrantDownloadablesWebhook|BenefitGrantLicenseKeysWebhook|BenefitGrantMeterCreditWebhook|BenefitGrantFeatureFlagWebhook $data, string $type = 'benefit_grant.revoked')
    {
        $this->timestamp = $timestamp;
        $this->data = $data;
        $this->type = $type;
    }
}