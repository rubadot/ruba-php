<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/** Metric - Information about a metric. */
class Metric
{
    /**
     * Unique identifier for the metric.
     *
     * @var string $slug
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('slug')]
    public string $slug;

    /**
     * Human-readable name for the metric.
     *
     * @var string $displayName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('display_name')]
    public string $displayName;

    /**
     *
     * @var \Ruba\Models\Components\MetricType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\MetricType')]
    public MetricType $type;

    /**
     * @param  string  $slug
     * @param  string  $displayName
     * @param  \Ruba\Models\Components\MetricType  $type
     * @phpstan-pure
     */
    public function __construct(string $slug, string $displayName, MetricType $type)
    {
        $this->slug = $slug;
        $this->displayName = $displayName;
        $this->type = $type;
    }
}