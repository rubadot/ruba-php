<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/** WebhookEndpointUpdate - Schema to update a webhook endpoint. */
class WebhookEndpointUpdate
{
    /**
     *
     * @var ?string $url
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $url = null;

    /**
     * An optional name for the webhook endpoint to help organize and identify it.
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     *
     * @var ?\Ruba\Models\Components\WebhookFormat $format
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('format')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\WebhookFormat|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?WebhookFormat $format = null;

    /**
     * $events
     *
     * @var ?array<\Ruba\Models\Components\WebhookEventType> $events
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('events')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Ruba\Models\Components\WebhookEventType>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $events = null;

    /**
     * Whether the webhook endpoint is enabled.
     *
     * @var ?bool $enabled
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('enabled')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $enabled = null;

    /**
     * @param  ?string  $url
     * @param  ?string  $name
     * @param  ?\Ruba\Models\Components\WebhookFormat  $format
     * @param  ?array<\Ruba\Models\Components\WebhookEventType>  $events
     * @param  ?bool  $enabled
     * @phpstan-pure
     */
    public function __construct(?string $url = null, ?string $name = null, ?WebhookFormat $format = null, ?array $events = null, ?bool $enabled = null)
    {
        $this->url = $url;
        $this->name = $name;
        $this->format = $format;
        $this->events = $events;
        $this->enabled = $enabled;
    }
}