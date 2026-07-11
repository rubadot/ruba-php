<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class SubscriptionUpdatedSeatsMetadata
{
    /**
     *
     * @var string $subscriptionId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subscription_id')]
    public string $subscriptionId;

    /**
     *
     * @var int $seats
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('seats')]
    public int $seats;

    /**
     *
     * @var \Ruba\Models\Components\SubscriptionProrationBehavior $prorationBehavior
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('proration_behavior')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\SubscriptionProrationBehavior')]
    public SubscriptionProrationBehavior $prorationBehavior;

    /**
     * @param  string  $subscriptionId
     * @param  int  $seats
     * @param  \Ruba\Models\Components\SubscriptionProrationBehavior  $prorationBehavior
     * @phpstan-pure
     */
    public function __construct(string $subscriptionId, int $seats, SubscriptionProrationBehavior $prorationBehavior)
    {
        $this->subscriptionId = $subscriptionId;
        $this->seats = $seats;
        $this->prorationBehavior = $prorationBehavior;
    }
}