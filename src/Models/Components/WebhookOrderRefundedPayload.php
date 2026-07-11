<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/**
 * WebhookOrderRefundedPayload - Sent when an order is fully or partially refunded.
 *
 *
 * **Discord & Slack support:** Full
 */
class WebhookOrderRefundedPayload
{
    /**
     *
     * @var \DateTime $timestamp
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('timestamp')]
    public \DateTime $timestamp;

    /**
     *
     * @var \Ruba\Models\Components\Order $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Order')]
    public Order $data;

    /**
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     * @param  string  $type
     * @param  \DateTime  $timestamp
     * @param  \Ruba\Models\Components\Order  $data
     * @phpstan-pure
     */
    public function __construct(\DateTime $timestamp, Order $data, string $type = 'order.refunded')
    {
        $this->timestamp = $timestamp;
        $this->data = $data;
        $this->type = $type;
    }
}