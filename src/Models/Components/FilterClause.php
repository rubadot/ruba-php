<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class FilterClause
{
    /**
     *
     * @var string $property
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('property')]
    public string $property;

    /**
     *
     * @var \Ruba\Models\Components\FilterOperator $operator
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('operator')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\FilterOperator')]
    public FilterOperator $operator;

    /**
     *
     * @var string|int|bool $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|int|bool')]
    public string|int|bool $value;

    /**
     * @param  string  $property
     * @param  \Ruba\Models\Components\FilterOperator  $operator
     * @param  string|int|bool  $value
     * @phpstan-pure
     */
    public function __construct(string $property, FilterOperator $operator, string|int|bool $value)
    {
        $this->property = $property;
        $this->operator = $operator;
        $this->value = $value;
    }
}