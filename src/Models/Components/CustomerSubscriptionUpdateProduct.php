<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class CustomerSubscriptionUpdateProduct
{
    /**
     * Update subscription to another product.
     *
     * @var string $productId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('product_id')]
    public string $productId;

    /**
     * @param  string  $productId
     * @phpstan-pure
     */
    public function __construct(string $productId)
    {
        $this->productId = $productId;
    }
}