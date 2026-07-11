<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class PropertyAggregation
{
    /**
     *
     * @var \Ruba\Models\Components\Func $func
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('func')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Func')]
    public Func $func;

    /**
     *
     * @var string $property
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('property')]
    public string $property;

    /**
     * @param  \Ruba\Models\Components\Func  $func
     * @param  string  $property
     * @phpstan-pure
     */
    public function __construct(Func $func, string $property)
    {
        $this->func = $func;
        $this->property = $property;
    }
}