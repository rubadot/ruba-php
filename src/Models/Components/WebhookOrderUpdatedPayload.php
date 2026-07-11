<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/**
 * WebhookOrderUpdatedPayload - Sent when an order is updated.
 *
 *
 * An order is updated when:
 *
 * * Its status changes, e.g. from `pending` to `paid`.
 * * It's refunded, partially or fully.
 *
 * **Discord & Slack support:** Full
 */
class WebhookOrderUpdatedPayload
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
    public function __construct(\DateTime $timestamp, Order $data, string $type = 'order.updated')
    {
        $this->timestamp = $timestamp;
        $this->data = $data;
        $this->type = $type;
    }
}