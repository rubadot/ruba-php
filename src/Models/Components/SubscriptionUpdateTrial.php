<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class SubscriptionUpdateTrial
{
    /**
     * Set or extend the trial period of the subscription. If set to `now`, the trial will end immediately.
     *
     * @var \DateTime $trialEnd
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('trial_end')]
    public \DateTime $trialEnd;

    /**
     * @param  \DateTime  $trialEnd
     * @phpstan-pure
     */
    public function __construct(\DateTime $trialEnd)
    {
        $this->trialEnd = $trialEnd;
    }
}