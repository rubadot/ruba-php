<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class SubscriptionUpdatedProductMetadata
{
    /**
     *
     * @var string $subscriptionId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subscription_id')]
    public string $subscriptionId;

    /**
     *
     * @var string $productId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('product_id')]
    public string $productId;

    /**
     *
     * @var \Ruba\Models\Components\SubscriptionProrationBehavior $prorationBehavior
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('proration_behavior')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\SubscriptionProrationBehavior')]
    public SubscriptionProrationBehavior $prorationBehavior;

    /**
     * @param  string  $subscriptionId
     * @param  string  $productId
     * @param  \Ruba\Models\Components\SubscriptionProrationBehavior  $prorationBehavior
     * @phpstan-pure
     */
    public function __construct(string $subscriptionId, string $productId, SubscriptionProrationBehavior $prorationBehavior)
    {
        $this->subscriptionId = $subscriptionId;
        $this->productId = $productId;
        $this->prorationBehavior = $prorationBehavior;
    }
}