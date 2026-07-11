<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class SubscriptionUpdateProduct
{
    /**
     * Update subscription to another product.
     *
     * @var string $productId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('product_id')]
    public string $productId;

    /**
     * Determine how to handle the proration billing. If not provided, will use the default organization setting.
     *
     * @var ?\Ruba\Models\Components\SubscriptionProrationBehavior $prorationBehavior
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('proration_behavior')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\SubscriptionProrationBehavior|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?SubscriptionProrationBehavior $prorationBehavior = null;

    /**
     * @param  string  $productId
     * @param  ?\Ruba\Models\Components\SubscriptionProrationBehavior  $prorationBehavior
     * @phpstan-pure
     */
    public function __construct(string $productId, ?SubscriptionProrationBehavior $prorationBehavior = null)
    {
        $this->productId = $productId;
        $this->prorationBehavior = $prorationBehavior;
    }
}