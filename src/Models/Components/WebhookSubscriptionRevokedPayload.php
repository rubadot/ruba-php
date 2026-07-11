<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/**
 * WebhookSubscriptionRevokedPayload - Sent when a subscription is revoked and the user loses access immediately.
 *
 * Happens when the subscription is canceled or payment retries are exhausted (status becomes `unpaid`).
 *
 * For payment failures that can still be recovered, see `subscription.past_due`.
 *
 * **Discord & Slack support:** Full
 */
class WebhookSubscriptionRevokedPayload
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
    public function __construct(\DateTime $timestamp, Subscription $data, string $type = 'subscription.revoked')
    {
        $this->timestamp = $timestamp;
        $this->data = $data;
        $this->type = $type;
    }
}