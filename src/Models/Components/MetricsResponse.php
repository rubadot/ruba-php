<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/** MetricsResponse - Metrics response schema. */
class MetricsResponse
{
    /**
     * List of data for each timestamp.
     *
     * @var array<\Ruba\Models\Components\MetricPeriod> $periods
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('periods')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Ruba\Models\Components\MetricPeriod>')]
    public array $periods;

    /**
     *
     * @var \Ruba\Models\Components\MetricsTotals $totals
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('totals')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\MetricsTotals')]
    public MetricsTotals $totals;

    /**
     *
     * @var \Ruba\Models\Components\Metrics $metrics
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metrics')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metrics')]
    public Metrics $metrics;

    /**
     * @param  array<\Ruba\Models\Components\MetricPeriod>  $periods
     * @param  \Ruba\Models\Components\MetricsTotals  $totals
     * @param  \Ruba\Models\Components\Metrics  $metrics
     * @phpstan-pure
     */
    public function __construct(array $periods, MetricsTotals $totals, Metrics $metrics)
    {
        $this->periods = $periods;
        $this->totals = $totals;
        $this->metrics = $metrics;
    }
}