<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class OrganizationCustomerPortalSettings
{
    /**
     *
     * @var \Ruba\Models\Components\CustomerPortalUsageSettings $usage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('usage')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\CustomerPortalUsageSettings')]
    public CustomerPortalUsageSettings $usage;

    /**
     *
     * @var \Ruba\Models\Components\CustomerPortalSubscriptionSettings $subscription
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subscription')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\CustomerPortalSubscriptionSettings')]
    public CustomerPortalSubscriptionSettings $subscription;

    /**
     * @param  \Ruba\Models\Components\CustomerPortalUsageSettings  $usage
     * @param  \Ruba\Models\Components\CustomerPortalSubscriptionSettings  $subscription
     * @phpstan-pure
     */
    public function __construct(CustomerPortalUsageSettings $usage, CustomerPortalSubscriptionSettings $subscription)
    {
        $this->usage = $usage;
        $this->subscription = $subscription;
    }
}