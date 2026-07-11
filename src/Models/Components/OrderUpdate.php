<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/** OrderUpdate - Schema to update an order. */
class OrderUpdate
{
    /**
     * The name of the customer that should appear on the invoice.
     *
     * @var ?string $billingName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('billing_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $billingName = null;

    /**
     * The address of the customer that should appear on the invoice. Country and state fields cannot be updated.
     *
     * @var ?\Ruba\Models\Components\AddressInput $billingAddress
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('billing_address')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\AddressInput|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AddressInput $billingAddress = null;

    /**
     * @param  ?string  $billingName
     * @param  ?\Ruba\Models\Components\AddressInput  $billingAddress
     * @phpstan-pure
     */
    public function __construct(?string $billingName = null, ?AddressInput $billingAddress = null)
    {
        $this->billingName = $billingName;
        $this->billingAddress = $billingAddress;
    }
}