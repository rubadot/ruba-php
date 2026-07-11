<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/**
 * WebhookCustomerStateChangedPayload - Sent when a customer state has changed.
 *
 *
 * It's triggered when:
 *
 * * Customer is created, updated or deleted.
 * * A subscription is created or updated.
 * * A benefit is granted or revoked.
 *
 * **Discord & Slack support:** Basic
 */
class WebhookCustomerStateChangedPayload
{
    /**
     *
     * @var \DateTime $timestamp
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('timestamp')]
    public \DateTime $timestamp;

    /**
     *
     * @var \Ruba\Models\Components\CustomerStateIndividual|\Ruba\Models\Components\CustomerStateTeam $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\CustomerStateIndividual|\Ruba\Models\Components\CustomerStateTeam')]
    #[\Speakeasy\Serializer\Annotation\UnionDiscriminator(field: 'type', map: ['individual' => '\Ruba\Models\Components\CustomerStateIndividual', 'team' => '\Ruba\Models\Components\CustomerStateTeam'])]
    public CustomerStateIndividual|CustomerStateTeam $data;

    /**
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     * @param  string  $type
     * @param  \DateTime  $timestamp
     * @param  \Ruba\Models\Components\CustomerStateIndividual|\Ruba\Models\Components\CustomerStateTeam  $data
     * @phpstan-pure
     */
    public function __construct(\DateTime $timestamp, CustomerStateIndividual|CustomerStateTeam $data, string $type = 'customer.state_changed')
    {
        $this->timestamp = $timestamp;
        $this->data = $data;
        $this->type = $type;
    }
}