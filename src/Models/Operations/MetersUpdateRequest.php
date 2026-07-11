<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
use Ruba\Utils\SpeakeasyMetadata;
class MetersUpdateRequest
{
    /**
     * The meter ID.
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     *
     * @var \Ruba\Models\Components\MeterUpdate $meterUpdate
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\MeterUpdate $meterUpdate;

    /**
     * @param  string  $id
     * @param  \Ruba\Models\Components\MeterUpdate  $meterUpdate
     * @phpstan-pure
     */
    public function __construct(string $id, Components\MeterUpdate $meterUpdate)
    {
        $this->id = $id;
        $this->meterUpdate = $meterUpdate;
    }
}