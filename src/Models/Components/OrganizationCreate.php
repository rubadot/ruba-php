<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class OrganizationCreate
{
    /**
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var string $slug
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('slug')]
    public string $slug;

    /**
     *
     * @var ?\Ruba\Models\Components\PresentmentCurrency $defaultPresentmentCurrency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('default_presentment_currency')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\PresentmentCurrency|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PresentmentCurrency $defaultPresentmentCurrency = null;

    /**
     *
     * @var ?\Ruba\Models\Components\TaxBehaviorOption $defaultTaxBehavior
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('default_tax_behavior')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\TaxBehaviorOption|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?TaxBehaviorOption $defaultTaxBehavior = null;

    /**
     *
     * @var ?string $avatarUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('avatar_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $avatarUrl = null;

    /**
     *
     * @var \Ruba\Models\Components\OrganizationIndividualLegalEntitySchema|\Ruba\Models\Components\OrganizationCompanyLegalEntitySchema|null $legalEntity
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('legal_entity')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\OrganizationIndividualLegalEntitySchema|\Ruba\Models\Components\OrganizationCompanyLegalEntitySchema|null')]
    #[\Speakeasy\Serializer\Annotation\UnionDiscriminator(field: 'type', map: ['company' => '\Ruba\Models\Components\OrganizationCompanyLegalEntitySchema', 'individual' => '\Ruba\Models\Components\OrganizationIndividualLegalEntitySchema'])]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public OrganizationIndividualLegalEntitySchema|OrganizationCompanyLegalEntitySchema|null $legalEntity = null;

    /**
     * Public support email.
     *
     * @var ?string $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $email = null;

    /**
     * Official website of the organization.
     *
     * @var ?string $website
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('website')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $website = null;

    /**
     * Link to social profiles.
     *
     * @var ?array<\Ruba\Models\Components\OrganizationSocialLink> $socials
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('socials')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Ruba\Models\Components\OrganizationSocialLink>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $socials = null;

    /**
     * Additional, private, business details Ruba needs about active organizations for compliance (KYC).
     *
     * @var ?\Ruba\Models\Components\OrganizationDetails $details
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('details')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\OrganizationDetails|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?OrganizationDetails $details = null;

    /**
     * Two-letter country code (ISO 3166-1 alpha-2).
     *
     * @var ?\Ruba\Models\Components\CountryAlpha2Input $country
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('country')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\CountryAlpha2Input|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CountryAlpha2Input $country = null;

    /**
     *
     * @var ?\Ruba\Models\Components\OrganizationFeatureSettings $featureSettings
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('feature_settings')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\OrganizationFeatureSettings|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?OrganizationFeatureSettings $featureSettings = null;

    /**
     *
     * @var ?\Ruba\Models\Components\OrganizationSubscriptionSettings $subscriptionSettings
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subscription_settings')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\OrganizationSubscriptionSettings|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?OrganizationSubscriptionSettings $subscriptionSettings = null;

    /**
     *
     * @var ?\Ruba\Models\Components\OrganizationNotificationSettings $notificationSettings
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('notification_settings')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\OrganizationNotificationSettings|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?OrganizationNotificationSettings $notificationSettings = null;

    /**
     *
     * @var ?\Ruba\Models\Components\OrganizationCustomerEmailSettings $customerEmailSettings
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_email_settings')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\OrganizationCustomerEmailSettings|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?OrganizationCustomerEmailSettings $customerEmailSettings = null;

    /**
     *
     * @var ?\Ruba\Models\Components\OrganizationCustomerPortalSettings $customerPortalSettings
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_portal_settings')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\OrganizationCustomerPortalSettings|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?OrganizationCustomerPortalSettings $customerPortalSettings = null;

    /**
     * @param  string  $name
     * @param  string  $slug
     * @param  ?\Ruba\Models\Components\PresentmentCurrency  $defaultPresentmentCurrency
     * @param  ?\Ruba\Models\Components\TaxBehaviorOption  $defaultTaxBehavior
     * @param  ?string  $avatarUrl
     * @param  \Ruba\Models\Components\OrganizationIndividualLegalEntitySchema|\Ruba\Models\Components\OrganizationCompanyLegalEntitySchema|null  $legalEntity
     * @param  ?string  $email
     * @param  ?string  $website
     * @param  ?array<\Ruba\Models\Components\OrganizationSocialLink>  $socials
     * @param  ?\Ruba\Models\Components\OrganizationDetails  $details
     * @param  ?\Ruba\Models\Components\CountryAlpha2Input  $country
     * @param  ?\Ruba\Models\Components\OrganizationFeatureSettings  $featureSettings
     * @param  ?\Ruba\Models\Components\OrganizationSubscriptionSettings  $subscriptionSettings
     * @param  ?\Ruba\Models\Components\OrganizationNotificationSettings  $notificationSettings
     * @param  ?\Ruba\Models\Components\OrganizationCustomerEmailSettings  $customerEmailSettings
     * @param  ?\Ruba\Models\Components\OrganizationCustomerPortalSettings  $customerPortalSettings
     * @phpstan-pure
     */
    public function __construct(string $name, string $slug, ?PresentmentCurrency $defaultPresentmentCurrency = null, ?TaxBehaviorOption $defaultTaxBehavior = null, ?string $avatarUrl = null, OrganizationIndividualLegalEntitySchema|OrganizationCompanyLegalEntitySchema|null $legalEntity = null, ?string $email = null, ?string $website = null, ?array $socials = null, ?OrganizationDetails $details = null, ?CountryAlpha2Input $country = null, ?OrganizationFeatureSettings $featureSettings = null, ?OrganizationSubscriptionSettings $subscriptionSettings = null, ?OrganizationNotificationSettings $notificationSettings = null, ?OrganizationCustomerEmailSettings $customerEmailSettings = null, ?OrganizationCustomerPortalSettings $customerPortalSettings = null)
    {
        $this->name = $name;
        $this->slug = $slug;
        $this->defaultPresentmentCurrency = $defaultPresentmentCurrency;
        $this->defaultTaxBehavior = $defaultTaxBehavior;
        $this->avatarUrl = $avatarUrl;
        $this->legalEntity = $legalEntity;
        $this->email = $email;
        $this->website = $website;
        $this->socials = $socials;
        $this->details = $details;
        $this->country = $country;
        $this->featureSettings = $featureSettings;
        $this->subscriptionSettings = $subscriptionSettings;
        $this->notificationSettings = $notificationSettings;
        $this->customerEmailSettings = $customerEmailSettings;
        $this->customerPortalSettings = $customerPortalSettings;
    }
}