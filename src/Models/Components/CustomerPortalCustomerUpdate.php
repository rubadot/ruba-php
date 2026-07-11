<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class CustomerPortalCustomerUpdate
{
    /**
     *
     * @var ?string $billingName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('billing_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $billingName = null;

    /**
     *
     * @var ?\Ruba\Models\Components\AddressInput $billingAddress
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('billing_address')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\AddressInput|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AddressInput $billingAddress = null;

    /**
     *
     * @var ?string $taxId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tax_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $taxId = null;

    /**
     * @param  ?string  $billingName
     * @param  ?\Ruba\Models\Components\AddressInput  $billingAddress
     * @param  ?string  $taxId
     * @phpstan-pure
     */
    public function __construct(?string $billingName = null, ?AddressInput $billingAddress = null, ?string $taxId = null)
    {
        $this->billingName = $billingName;
        $this->billingAddress = $billingAddress;
        $this->taxId = $taxId;
    }
}