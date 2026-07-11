<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
use Ruba\Utils\SpeakeasyMetadata;
class WebhooksUpdateWebhookEndpointRequest
{
    /**
     * The webhook endpoint ID.
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     *
     * @var \Ruba\Models\Components\WebhookEndpointUpdate $webhookEndpointUpdate
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\WebhookEndpointUpdate $webhookEndpointUpdate;

    /**
     * @param  string  $id
     * @param  \Ruba\Models\Components\WebhookEndpointUpdate  $webhookEndpointUpdate
     * @phpstan-pure
     */
    public function __construct(string $id, Components\WebhookEndpointUpdate $webhookEndpointUpdate)
    {
        $this->id = $id;
        $this->webhookEndpointUpdate = $webhookEndpointUpdate;
    }
}