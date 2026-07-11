<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/**
 * WebhookOrderCreatedPayload - Sent when a new order is created.
 *
 *
 * A new order is created when:
 *
 * * A customer purchases a one-time product. In this case, `billing_reason` is set to `purchase`.
 * * A customer starts a subscription. In this case, `billing_reason` is set to `subscription_create`.
 * * A subscription is renewed. In this case, `billing_reason` is set to `subscription_cycle`.
 * * A subscription is upgraded or downgraded with an immediate proration invoice. In this case, `billing_reason` is set to `subscription_update`.
 *
 * > [!WARNING]
 * > The order might not be paid yet, so the `status` field might be `pending`.
 *
 * **Discord & Slack support:** Full
 */
class WebhookOrderCreatedPayload
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
    public function __construct(\DateTime $timestamp, Order $data, string $type = 'order.created')
    {
        $this->timestamp = $timestamp;
        $this->data = $data;
        $this->type = $type;
    }
}