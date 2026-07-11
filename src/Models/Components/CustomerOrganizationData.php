<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/** CustomerOrganizationData - Schema of an organization and related data for customer portal. */
class CustomerOrganizationData
{
    /**
     *
     * @var \Ruba\Models\Components\CustomerOrganization $organization
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('organization')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\CustomerOrganization')]
    public CustomerOrganization $organization;

    /**
     * $products
     *
     * @var array<\Ruba\Models\Components\CustomerProduct> $products
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('products')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Ruba\Models\Components\CustomerProduct>')]
    public array $products;

    /**
     * @param  \Ruba\Models\Components\CustomerOrganization  $organization
     * @param  array<\Ruba\Models\Components\CustomerProduct>  $products
     * @phpstan-pure
     */
    public function __construct(CustomerOrganization $organization, array $products)
    {
        $this->organization = $organization;
        $this->products = $products;
    }
}