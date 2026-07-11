<?php

declare(strict_types=1);

namespace Ruba\Models\Components;

use Brick\DateTime\LocalDate;
/** MetricsLimits - Date limits to get metrics. */
class MetricsLimits
{
    /**
     * Minimum date to get metrics.
     *
     * @var LocalDate $minDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('min_date')]
    public LocalDate $minDate;

    /**
     * Date interval limits to get metrics for each interval.
     *
     * @var \Ruba\Models\Components\MetricsIntervalsLimits $intervals
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('intervals')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\MetricsIntervalsLimits')]
    public MetricsIntervalsLimits $intervals;

    /**
     * @param  LocalDate  $minDate
     * @param  \Ruba\Models\Components\MetricsIntervalsLimits  $intervals
     * @phpstan-pure
     */
    public function __construct(LocalDate $minDate, MetricsIntervalsLimits $intervals)
    {
        $this->minDate = $minDate;
        $this->intervals = $intervals;
    }
}