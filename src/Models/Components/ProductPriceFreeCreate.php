<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/** ProductPriceFreeCreate - Schema to create a free price. */
class ProductPriceFreeCreate
{
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
     * @param  ?\Ruba\Models\Components\PresentmentCurrency  $priceCurrency
     * @param  ?\Ruba\Models\Components\TaxBehaviorOption  $taxBehavior
     * @phpstan-pure
     */
    public function __construct(?PresentmentCurrency $priceCurrency = null, ?TaxBehaviorOption $taxBehavior = null, string $amountType = 'free')
    {
        $this->priceCurrency = $priceCurrency;
        $this->taxBehavior = $taxBehavior;
        $this->amountType = $amountType;
    }
}