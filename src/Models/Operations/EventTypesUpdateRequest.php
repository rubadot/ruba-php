<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
use Ruba\Utils\SpeakeasyMetadata;
class EventTypesUpdateRequest
{
    /**
     * The event type ID.
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     *
     * @var \Ruba\Models\Components\EventTypeUpdate $eventTypeUpdate
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\EventTypeUpdate $eventTypeUpdate;

    /**
     * @param  string  $id
     * @param  \Ruba\Models\Components\EventTypeUpdate  $eventTypeUpdate
     * @phpstan-pure
     */
    public function __construct(string $id, Components\EventTypeUpdate $eventTypeUpdate)
    {
        $this->id = $id;
        $this->eventTypeUpdate = $eventTypeUpdate;
    }
}