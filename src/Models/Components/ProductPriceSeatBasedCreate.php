<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/** ProductPriceSeatBasedCreate - Schema to create a seat-based price with volume-based tiers. */
class ProductPriceSeatBasedCreate
{
    /**
     * List of pricing tiers for seat-based pricing.
     *
     *
     * The minimum and maximum seat limits are derived from the tiers:
     * - minimum_seats = first tier's min_seats
     * - maximum_seats = last tier's max_seats (None for unlimited)
     *
     * @var \Ruba\Models\Components\ProductPriceSeatTiersInput $seatTiers
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('seat_tiers')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\ProductPriceSeatTiersInput')]
    public ProductPriceSeatTiersInput $seatTiers;

    /**
     *
     * @var ?\Ruba\Models\Components\PresentmentCurrency $priceCurrency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('price_currency')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\PresentmentCurrency|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PresentmentCurrency $priceCurrency = null;

    /**
     * The tax behavior of the price. If not set, it will default to the organization's default tax behavior.
     *
     * @var ?\Ruba\Models\Components\TaxBehaviorOption $taxBehavior
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tax_behavior')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\TaxBehaviorOption|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?TaxBehaviorOption $taxBehavior = null;

    /**
     *
     * @var string $amountType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount_type')]
    public string $amountType;

    /**
     * @param  string  $amountType
     * @param  \Ruba\Models\Components\ProductPriceSeatTiersInput  $seatTiers
     * @param  ?\Ruba\Models\Components\PresentmentCurrency  $priceCurrency
     * @param  ?\Ruba\Models\Components\TaxBehaviorOption  $taxBehavior
     * @phpstan-pure
     */
    public function __construct(ProductPriceSeatTiersInput $seatTiers, ?PresentmentCurrency $priceCurrency = null, ?TaxBehaviorOption $taxBehavior = null, string $amountType = 'seat_based')
    {
        $this->seatTiers = $seatTiers;
        $this->priceCurrency = $priceCurrency;
        $this->taxBehavior = $taxBehavior;
        $this->amountType = $amountType;
    }
}