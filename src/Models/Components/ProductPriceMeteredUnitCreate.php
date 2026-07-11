<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/** ProductPriceMeteredUnitCreate - Schema to create a metered price with a fixed unit price. */
class ProductPriceMeteredUnitCreate
{
    /**
     * The ID of the meter associated to the price.
     *
     * @var string $meterId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('meter_id')]
    public string $meterId;

    /**
     * The price per unit in cents. Supports up to 12 decimal places.
     *
     * @var float|string $unitAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('unit_amount')]
    #[\Speakeasy\Serializer\Annotation\Type('float|string')]
    public float|string $unitAmount;

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
     * Optional maximum amount in cents that can be charged, regardless of the number of units consumed.
     *
     * @var ?int $capAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cap_amount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $capAmount = null;

    /**
     *
     * @var string $amountType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount_type')]
    public string $amountType;

    /**
     * @param  string  $amountType
     * @param  string  $meterId
     * @param  float|string  $unitAmount
     * @param  ?\Ruba\Models\Components\PresentmentCurrency  $priceCurrency
     * @param  ?\Ruba\Models\Components\TaxBehaviorOption  $taxBehavior
     * @param  ?int  $capAmount
     * @phpstan-pure
     */
    public function __construct(string $meterId, float|string $unitAmount, ?PresentmentCurrency $priceCurrency = null, ?TaxBehaviorOption $taxBehavior = null, ?int $capAmount = null, string $amountType = 'metered_unit')
    {
        $this->meterId = $meterId;
        $this->unitAmount = $unitAmount;
        $this->priceCurrency = $priceCurrency;
        $this->taxBehavior = $taxBehavior;
        $this->capAmount = $capAmount;
        $this->amountType = $amountType;
    }
}