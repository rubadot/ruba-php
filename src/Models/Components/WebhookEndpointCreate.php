<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/** WebhookEndpointCreate - Schema to create a webhook endpoint. */
class WebhookEndpointCreate
{
    /**
     * The URL where the webhook events will be sent.
     *
     * @var string $url
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('url')]
    public string $url;

    /**
     *
     * @var \Ruba\Models\Components\WebhookFormat $format
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('format')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\WebhookFormat')]
    public WebhookFormat $format;

    /**
     * The events that will trigger the webhook.
     *
     * @var array<\Ruba\Models\Components\WebhookEventType> $events
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('events')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Ruba\Models\Components\WebhookEventType>')]
    public array $events;

    /**
     * An optional name for the webhook endpoint to help organize and identify it.
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * The organization ID associated with the webhook endpoint. **Required unless you use an organization token.**
     *
     * @var ?string $organizationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('organization_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $organizationId = null;

    /**
     * @param  string  $url
     * @param  \Ruba\Models\Components\WebhookFormat  $format
     * @param  array<\Ruba\Models\Components\WebhookEventType>  $events
     * @param  ?string  $name
     * @param  ?string  $organizationId
     * @phpstan-pure
     */
    public function __construct(string $url, WebhookFormat $format, array $events, ?string $name = null, ?string $organizationId = null)
    {
        $this->url = $url;
        $this->format = $format;
        $this->events = $events;
        $this->name = $name;
        $this->organizationId = $organizationId;
    }
}