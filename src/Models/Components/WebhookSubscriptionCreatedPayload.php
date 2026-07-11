<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/**
 * WebhookSubscriptionCreatedPayload - Sent when a new subscription is created.
 *
 *
 * When this event occurs, the subscription `status` might not be `active` yet, as we can still have to wait for the first payment to be processed.
 *
 * **Discord & Slack support:** Full
 */
class WebhookSubscriptionCreatedPayload
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
    public function __construct(\DateTime $timestamp, Subscription $data, string $type = 'subscription.created')
    {
        $this->timestamp = $timestamp;
        $this->data = $data;
        $this->type = $type;
    }
}