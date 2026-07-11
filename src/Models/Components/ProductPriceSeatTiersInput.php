<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/**
 * ProductPriceSeatTiersInput - List of pricing tiers for seat-based pricing.
 *
 *
 * The minimum and maximum seat limits are derived from the tiers:
 * - minimum_seats = first tier's min_seats
 * - maximum_seats = last tier's max_seats (None for unlimited)
 */
class ProductPriceSeatTiersInput
{
    /**
     * List of pricing tiers
     *
     * @var array<\Ruba\Models\Components\ProductPriceSeatTier> $tiers
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tiers')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Ruba\Models\Components\ProductPriceSeatTier>')]
    public array $tiers;

    /**
     *
     * @var ?\Ruba\Models\Components\SeatTierType $seatTierType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('seat_tier_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\SeatTierType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?SeatTierType $seatTierType = null;

    /**
     * @param  array<\Ruba\Models\Components\ProductPriceSeatTier>  $tiers
     * @param  ?\Ruba\Models\Components\SeatTierType  $seatTierType
     * @phpstan-pure
     */
    public function __construct(array $tiers, ?SeatTierType $seatTierType = null)
    {
        $this->tiers = $tiers;
        $this->seatTierType = $seatTierType;
    }
}