<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class OrganizationNotificationSettings
{
    /**
     *
     * @var bool $newOrder
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('new_order')]
    public bool $newOrder;

    /**
     *
     * @var bool $newSubscription
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('new_subscription')]
    public bool $newSubscription;

    /**
     * @param  bool  $newOrder
     * @param  bool  $newSubscription
     * @phpstan-pure
     */
    public function __construct(bool $newOrder, bool $newSubscription)
    {
        $this->newOrder = $newOrder;
        $this->newSubscription = $newSubscription;
    }
}