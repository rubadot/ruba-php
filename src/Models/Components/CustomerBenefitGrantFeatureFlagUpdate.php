<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class CustomerBenefitGrantFeatureFlagUpdate
{
    /**
     *
     * @var string $benefitType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('benefit_type')]
    public string $benefitType;

    /**
     * @param  string  $benefitType
     * @phpstan-pure
     */
    public function __construct(string $benefitType = 'feature_flag')
    {
        $this->benefitType = $benefitType;
    }
}