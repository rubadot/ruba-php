<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class MeterQuantities
{
    /**
     * $quantities
     *
     * @var array<\Ruba\Models\Components\MeterQuantity> $quantities
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('quantities')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Ruba\Models\Components\MeterQuantity>')]
    public array $quantities;

    /**
     * The total quantity for the period.
     *
     * @var float $total
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('total')]
    public float $total;

    /**
     * @param  array<\Ruba\Models\Components\MeterQuantity>  $quantities
     * @param  float  $total
     * @phpstan-pure
     */
    public function __construct(array $quantities, float $total)
    {
        $this->quantities = $quantities;
        $this->total = $total;
    }
}