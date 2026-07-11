<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/**
 * WebhookCheckoutUpdatedPayload - Sent when a checkout is updated.
 *
 *
 * **Discord & Slack support:** Basic
 */
class WebhookCheckoutUpdatedPayload
{
    /**
     *
     * @var \DateTime $timestamp
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('timestamp')]
    public \DateTime $timestamp;

    /**
     * Checkout session data retrieved using an access token.
     *
     * @var \Ruba\Models\Components\Checkout $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Checkout')]
    public Checkout $data;

    /**
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     * @param  string  $type
     * @param  \DateTime  $timestamp
     * @param  \Ruba\Models\Components\Checkout  $data
     * @phpstan-pure
     */
    public function __construct(\DateTime $timestamp, Checkout $data, string $type = 'checkout.updated')
    {
        $this->timestamp = $timestamp;
        $this->data = $data;
        $this->type = $type;
    }
}