<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/**
 * WebhookOrderPaidPayload - Sent when an order is paid.
 *
 *
 * When you receive this event, the order is fully processed and payment has been received.
 *
 * **Discord & Slack support:** Full
 */
class WebhookOrderPaidPayload
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
    public function __construct(\DateTime $timestamp, Order $data, string $type = 'order.paid')
    {
        $this->timestamp = $timestamp;
        $this->data = $data;
        $this->type = $type;
    }
}