<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class EventsIngest
{
    /**
     * List of events to ingest.
     *
     * @var array<\Ruba\Models\Components\EventCreateCustomer|\Ruba\Models\Components\EventCreateExternalCustomer> $events
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('events')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Ruba\Models\Components\EventCreateCustomer|\Ruba\Models\Components\EventCreateExternalCustomer>')]
    public array $events;

    /**
     * @param  array<\Ruba\Models\Components\EventCreateCustomer|\Ruba\Models\Components\EventCreateExternalCustomer>  $events
     * @phpstan-pure
     */
    public function __construct(array $events)
    {
        $this->events = $events;
    }
}