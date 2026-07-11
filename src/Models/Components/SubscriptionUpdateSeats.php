<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class SubscriptionUpdateSeats
{
    /**
     * Update the number of seats for this subscription.
     *
     * @var int $seats
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('seats')]
    public int $seats;

    /**
     * Determine how to handle the proration billing. If not provided, will use the default organization setting.
     *
     * @var ?\Ruba\Models\Components\SubscriptionProrationBehavior $prorationBehavior
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('proration_behavior')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\SubscriptionProrationBehavior|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?SubscriptionProrationBehavior $prorationBehavior = null;

    /**
     * @param  int  $seats
     * @param  ?\Ruba\Models\Components\SubscriptionProrationBehavior  $prorationBehavior
     * @phpstan-pure
     */
    public function __construct(int $seats, ?SubscriptionProrationBehavior $prorationBehavior = null)
    {
        $this->seats = $seats;
        $this->prorationBehavior = $prorationBehavior;
    }
}