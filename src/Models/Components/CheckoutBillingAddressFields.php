<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class CheckoutBillingAddressFields
{
    /**
     *
     * @var \Ruba\Models\Components\BillingAddressFieldMode $country
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('country')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\BillingAddressFieldMode')]
    public BillingAddressFieldMode $country;

    /**
     *
     * @var \Ruba\Models\Components\BillingAddressFieldMode $state
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('state')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\BillingAddressFieldMode')]
    public BillingAddressFieldMode $state;

    /**
     *
     * @var \Ruba\Models\Components\BillingAddressFieldMode $city
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('city')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\BillingAddressFieldMode')]
    public BillingAddressFieldMode $city;

    /**
     *
     * @var \Ruba\Models\Components\BillingAddressFieldMode $postalCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('postal_code')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\BillingAddressFieldMode')]
    public BillingAddressFieldMode $postalCode;

    /**
     *
     * @var \Ruba\Models\Components\BillingAddressFieldMode $line1
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('line1')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\BillingAddressFieldMode')]
    public BillingAddressFieldMode $line1;

    /**
     *
     * @var \Ruba\Models\Components\BillingAddressFieldMode $line2
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('line2')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\BillingAddressFieldMode')]
    public BillingAddressFieldMode $line2;

    /**
     * @param  \Ruba\Models\Components\BillingAddressFieldMode  $country
     * @param  \Ruba\Models\Components\BillingAddressFieldMode  $state
     * @param  \Ruba\Models\Components\BillingAddressFieldMode  $city
     * @param  \Ruba\Models\Components\BillingAddressFieldMode  $postalCode
     * @param  \Ruba\Models\Components\BillingAddressFieldMode  $line1
     * @param  \Ruba\Models\Components\BillingAddressFieldMode  $line2
     * @phpstan-pure
     */
    public function __construct(BillingAddressFieldMode $country, BillingAddressFieldMode $state, BillingAddressFieldMode $city, BillingAddressFieldMode $postalCode, BillingAddressFieldMode $line1, BillingAddressFieldMode $line2)
    {
        $this->country = $country;
        $this->state = $state;
        $this->city = $city;
        $this->postalCode = $postalCode;
        $this->line1 = $line1;
        $this->line2 = $line2;
    }
}