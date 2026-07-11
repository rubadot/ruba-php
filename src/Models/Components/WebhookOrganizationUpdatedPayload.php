<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/**
 * WebhookOrganizationUpdatedPayload - Sent when a organization is updated.
 *
 *
 * **Discord & Slack support:** Basic
 */
class WebhookOrganizationUpdatedPayload
{
    /**
     *
     * @var \DateTime $timestamp
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('timestamp')]
    public \DateTime $timestamp;

    /**
     *
     * @var \Ruba\Models\Components\Organization $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Organization')]
    public Organization $data;

    /**
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     * @param  string  $type
     * @param  \DateTime  $timestamp
     * @param  \Ruba\Models\Components\Organization  $data
     * @phpstan-pure
     */
    public function __construct(\DateTime $timestamp, Organization $data, string $type = 'organization.updated')
    {
        $this->timestamp = $timestamp;
        $this->data = $data;
        $this->type = $type;
    }
}