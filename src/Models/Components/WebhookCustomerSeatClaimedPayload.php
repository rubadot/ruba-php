<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/**
 * WebhookCustomerSeatClaimedPayload - Sent when a customer seat is claimed.
 *
 *
 * This event is triggered when a customer accepts the seat invitation and claims their access.
 */
class WebhookCustomerSeatClaimedPayload
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
    public function __construct(\DateTime $timestamp, CustomerSeat $data, string $type = 'customer_seat.claimed')
    {
        $this->timestamp = $timestamp;
        $this->data = $data;
        $this->type = $type;
    }
}