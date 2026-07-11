<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/**
 * WebhookProductUpdatedPayload - Sent when a product is updated.
 *
 *
 * **Discord & Slack support:** Basic
 */
class WebhookProductUpdatedPayload
{
    /**
     *
     * @var \DateTime $timestamp
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('timestamp')]
    public \DateTime $timestamp;

    /**
     * A product.
     *
     * @var \Ruba\Models\Components\Product $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Product')]
    public Product $data;

    /**
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     * @param  string  $type
     * @param  \DateTime  $timestamp
     * @param  \Ruba\Models\Components\Product  $data
     * @phpstan-pure
     */
    public function __construct(\DateTime $timestamp, Product $data, string $type = 'product.updated')
    {
        $this->timestamp = $timestamp;
        $this->data = $data;
        $this->type = $type;
    }
}