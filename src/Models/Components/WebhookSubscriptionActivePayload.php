<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/**
 * WebhookSubscriptionActivePayload - Sent when a subscription becomes active,
 *
 * whether because it's a new paid subscription or because payment was recovered.
 *
 * **Discord & Slack support:** Full
 */
class WebhookSubscriptionActivePayload
{
    /**
     *
     * @var \DateTime $timestamp
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('timestamp')]
    public \DateTime $timestamp;

    /**
     *
     * @var \Ruba\Models\Components\Subscription $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Subscription')]
    public Subscription $data;

    /**
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     * @param  string  $type
     * @param  \DateTime  $timestamp
     * @param  \Ruba\Models\Components\Subscription  $data
     * @phpstan-pure
     */
    public function __construct(\DateTime $timestamp, Subscription $data, string $type = 'subscription.active')
    {
        $this->timestamp = $timestamp;
        $this->data = $data;
        $this->type = $type;
    }
}