<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/**
 * WebhookCustomerCreatedPayload - Sent when a new customer is created.
 *
 *
 * A customer can be created:
 *
 * * After a successful checkout.
 * * Programmatically via the API.
 *
 * **Discord & Slack support:** Basic
 */
class WebhookCustomerCreatedPayload
{
    /**
     *
     * @var \DateTime $timestamp
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('timestamp')]
    public \DateTime $timestamp;

    /**
     *
     * @var \Ruba\Models\Components\CustomerIndividual|\Ruba\Models\Components\CustomerTeam $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\CustomerIndividual|\Ruba\Models\Components\CustomerTeam')]
    #[\Speakeasy\Serializer\Annotation\UnionDiscriminator(field: 'type', map: ['individual' => '\Ruba\Models\Components\CustomerIndividual', 'team' => '\Ruba\Models\Components\CustomerTeam'])]
    public CustomerIndividual|CustomerTeam $data;

    /**
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     * @param  string  $type
     * @param  \DateTime  $timestamp
     * @param  \Ruba\Models\Components\CustomerIndividual|\Ruba\Models\Components\CustomerTeam  $data
     * @phpstan-pure
     */
    public function __construct(\DateTime $timestamp, CustomerIndividual|CustomerTeam $data, string $type = 'customer.created')
    {
        $this->timestamp = $timestamp;
        $this->data = $data;
        $this->type = $type;
    }
}