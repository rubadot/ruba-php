<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/**
 * WebhookCustomerSeatRevokedPayload - Sent when a customer seat is revoked.
 *
 *
 * This event is triggered when access to a seat is revoked, either manually by the organization or automatically when a subscription is canceled.
 */
class WebhookCustomerSeatRevokedPayload
{
    /**
     *
     * @var \DateTime $timestamp
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('timestamp')]
    public \DateTime $timestamp;

    /**
     *
     * @var \Ruba\Models\Components\CustomerSeat $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\CustomerSeat')]
    public CustomerSeat $data;

    /**
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     * @param  string  $type
     * @param  \DateTime  $timestamp
     * @param  \Ruba\Models\Components\CustomerSeat  $data
     * @phpstan-pure
     */
    public function __construct(\DateTime $timestamp, CustomerSeat $data, string $type = 'customer_seat.revoked')
    {
        $this->timestamp = $timestamp;
        $this->data = $data;
        $this->type = $type;
    }
}