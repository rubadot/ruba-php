<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/**
 * WebhookRefundUpdatedPayload - Sent when a refund is updated.
 *
 *
 * **Discord & Slack support:** Full
 */
class WebhookRefundUpdatedPayload
{
    /**
     *
     * @var \DateTime $timestamp
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('timestamp')]
    public \DateTime $timestamp;

    /**
     *
     * @var \Ruba\Models\Components\Refund $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Refund')]
    public Refund $data;

    /**
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     * @param  string  $type
     * @param  \DateTime  $timestamp
     * @param  \Ruba\Models\Components\Refund  $data
     * @phpstan-pure
     */
    public function __construct(\DateTime $timestamp, Refund $data, string $type = 'refund.updated')
    {
        $this->timestamp = $timestamp;
        $this->data = $data;
        $this->type = $type;
    }
}