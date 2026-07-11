<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class MeterUpdate
{
    /**
     * Key-value object allowing you to store additional information.
     *
     *
     * The key must be a string with a maximum length of **40 characters**.
     * The value must be either:
     *
     * * A string with a maximum length of **500 characters**
     * * An integer
     * * A floating-point number
     * * A boolean
     *
     * You can store up to **50 key-value pairs**.
     *
     * @var ?array<string, string|int|float|bool> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string|int|float|bool>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $metadata = null;

    /**
     * The name of the meter. Will be shown on customer's invoices and usage.
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * The filter to apply on events that'll be used to calculate the meter.
     *
     * @var ?\Ruba\Models\Components\Filter $filter
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('filter')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Filter|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Filter $filter = null;

    /**
     * The aggregation to apply on the filtered events to calculate the meter.
     *
     * @var \Ruba\Models\Components\CountAggregation|\Ruba\Models\Components\PropertyAggregation|\Ruba\Models\Components\UniqueAggregation|null $aggregation
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('aggregation')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\CountAggregation|\Ruba\Models\Components\PropertyAggregation|\Ruba\Models\Components\UniqueAggregation|null')]
    #[\Speakeasy\Serializer\Annotation\UnionDiscriminator(field: 'func', map: ['avg' => '\Ruba\Models\Components\PropertyAggregation', 'count' => '\Ruba\Models\Components\CountAggregation', 'max' => '\Ruba\Models\Components\PropertyAggregation', 'min' => '\Ruba\Models\Components\PropertyAggregation', 'sum' => '\Ruba\Models\Components\PropertyAggregation', 'unique' => '\Ruba\Models\Components\UniqueAggregation'])]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public CountAggregation|PropertyAggregation|UniqueAggregation|null $aggregation = null;

    /**
     * Whether the meter is archived. Archived meters are no longer used for billing.
     *
     * @var ?bool $isArchived
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_archived')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $isArchived = null;

    /**
     * @param  ?array<string, string|int|float|bool>  $metadata
     * @param  ?string  $name
     * @param  ?\Ruba\Models\Components\Filter  $filter
     * @param  \Ruba\Models\Components\CountAggregation|\Ruba\Models\Components\PropertyAggregation|\Ruba\Models\Components\UniqueAggregation|null  $aggregation
     * @param  ?bool  $isArchived
     * @phpstan-pure
     */
    public function __construct(?array $metadata = null, ?string $name = null, ?Filter $filter = null, CountAggregation|PropertyAggregation|UniqueAggregation|null $aggregation = null, ?bool $isArchived = null)
    {
        $this->metadata = $metadata;
        $this->name = $name;
        $this->filter = $filter;
        $this->aggregation = $aggregation;
        $this->isArchived = $isArchived;
    }
}