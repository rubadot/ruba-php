<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class CustomerOrganization
{
    /**
     * Creation timestamp of the object.
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    public \DateTime $createdAt;

    /**
     * The ID of the object.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * Organization name shown in checkout, customer portal, emails etc.
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     * Unique organization slug in checkout, customer portal and credit card statements.
     *
     * @var string $slug
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('slug')]
    public string $slug;

    /**
     *
     * @var \Ruba\Models\Components\SubscriptionProrationBehavior $prorationBehavior
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('proration_behavior')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\SubscriptionProrationBehavior')]
    public SubscriptionProrationBehavior $prorationBehavior;

    /**
     * Whether customers can update their subscriptions from the customer portal.
     *
     * @var bool $allowCustomerUpdates
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('allow_customer_updates')]
    public bool $allowCustomerUpdates;

    /**
     *
     * @var \Ruba\Models\Components\OrganizationCustomerPortalSettings $customerPortalSettings
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_portal_settings')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\OrganizationCustomerPortalSettings')]
    public OrganizationCustomerPortalSettings $customerPortalSettings;

    /**
     * Last modification timestamp of the object.
     *
     * @var ?\DateTime $modifiedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('modified_at')]
    public ?\DateTime $modifiedAt;

    /**
     * Avatar URL shown in checkout, customer portal, emails etc.
     *
     * @var ?string $avatarUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('avatar_url')]
    public ?string $avatarUrl;

    /**
     * Feature flags exposed to the customer portal.
     *
     * @var ?\Ruba\Models\Components\CustomerOrganizationFeatureSettings $organizationFeatures
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('organization_features')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\CustomerOrganizationFeatureSettings|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CustomerOrganizationFeatureSettings $organizationFeatures = null;

    /**
     * @param  \DateTime  $createdAt
     * @param  string  $id
     * @param  string  $name
     * @param  string  $slug
     * @param  \Ruba\Models\Components\SubscriptionProrationBehavior  $prorationBehavior
     * @param  bool  $allowCustomerUpdates
     * @param  \Ruba\Models\Components\OrganizationCustomerPortalSettings  $customerPortalSettings
     * @param  ?\DateTime  $modifiedAt
     * @param  ?string  $avatarUrl
     * @param  ?\Ruba\Models\Components\CustomerOrganizationFeatureSettings  $organizationFeatures
     * @phpstan-pure
     */
    public function __construct(\DateTime $createdAt, string $id, string $name, string $slug, SubscriptionProrationBehavior $prorationBehavior, bool $allowCustomerUpdates, OrganizationCustomerPortalSettings $customerPortalSettings, ?\DateTime $modifiedAt = null, ?string $avatarUrl = null, ?CustomerOrganizationFeatureSettings $organizationFeatures = null)
    {
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->name = $name;
        $this->slug = $slug;
        $this->prorationBehavior = $prorationBehavior;
        $this->allowCustomerUpdates = $allowCustomerUpdates;
        $this->customerPortalSettings = $customerPortalSettings;
        $this->modifiedAt = $modifiedAt;
        $this->avatarUrl = $avatarUrl;
        $this->organizationFeatures = $organizationFeatures;
    }
}