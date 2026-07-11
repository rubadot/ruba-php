<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/** MetricsIntervalsLimits - Date interval limits to get metrics for each interval. */
class MetricsIntervalsLimits
{
    /**
     * Date interval limit to get metrics for a given interval.
     *
     * @var \Ruba\Models\Components\MetricsIntervalLimit $hour
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('hour')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\MetricsIntervalLimit')]
    public MetricsIntervalLimit $hour;

    /**
     * Date interval limit to get metrics for a given interval.
     *
     * @var \Ruba\Models\Components\MetricsIntervalLimit $day
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('day')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\MetricsIntervalLimit')]
    public MetricsIntervalLimit $day;

    /**
     * Date interval limit to get metrics for a given interval.
     *
     * @var \Ruba\Models\Components\MetricsIntervalLimit $week
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('week')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\MetricsIntervalLimit')]
    public MetricsIntervalLimit $week;

    /**
     * Date interval limit to get metrics for a given interval.
     *
     * @var \Ruba\Models\Components\MetricsIntervalLimit $month
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('month')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\MetricsIntervalLimit')]
    public MetricsIntervalLimit $month;

    /**
     * Date interval limit to get metrics for a given interval.
     *
     * @var \Ruba\Models\Components\MetricsIntervalLimit $year
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('year')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\MetricsIntervalLimit')]
    public MetricsIntervalLimit $year;

    /**
     * @param  \Ruba\Models\Components\MetricsIntervalLimit  $hour
     * @param  \Ruba\Models\Components\MetricsIntervalLimit  $day
     * @param  \Ruba\Models\Components\MetricsIntervalLimit  $week
     * @param  \Ruba\Models\Components\MetricsIntervalLimit  $month
     * @param  \Ruba\Models\Components\MetricsIntervalLimit  $year
     * @phpstan-pure
     */
    public function __construct(MetricsIntervalLimit $hour, MetricsIntervalLimit $day, MetricsIntervalLimit $week, MetricsIntervalLimit $month, MetricsIntervalLimit $year)
    {
        $this->hour = $hour;
        $this->day = $day;
        $this->week = $week;
        $this->month = $month;
        $this->year = $year;
    }
}