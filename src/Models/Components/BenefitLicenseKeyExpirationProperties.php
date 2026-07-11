<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class BenefitLicenseKeyExpirationProperties
{
    /**
     *
     * @var int $ttl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ttl')]
    public int $ttl;

    /**
     *
     * @var \Ruba\Models\Components\Timeframe $timeframe
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('timeframe')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Timeframe')]
    public Timeframe $timeframe;

    /**
     * @param  int  $ttl
     * @param  \Ruba\Models\Components\Timeframe  $timeframe
     * @phpstan-pure
     */
    public function __construct(int $ttl, Timeframe $timeframe)
    {
        $this->ttl = $ttl;
        $this->timeframe = $timeframe;
    }
}