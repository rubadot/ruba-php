<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
use Ruba\Utils\SpeakeasyMetadata;
class MetricsUpdateDashboardRequest
{
    /**
     * The metric dashboard ID.
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     *
     * @var \Ruba\Models\Components\MetricDashboardUpdate $metricDashboardUpdate
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\MetricDashboardUpdate $metricDashboardUpdate;

    /**
     * @param  string  $id
     * @param  \Ruba\Models\Components\MetricDashboardUpdate  $metricDashboardUpdate
     * @phpstan-pure
     */
    public function __construct(string $id, Components\MetricDashboardUpdate $metricDashboardUpdate)
    {
        $this->id = $id;
        $this->metricDashboardUpdate = $metricDashboardUpdate;
    }
}