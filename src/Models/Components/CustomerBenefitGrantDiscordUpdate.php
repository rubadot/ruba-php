<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class CustomerBenefitGrantDiscordUpdate
{
    /**
     *
     * @var \Ruba\Models\Components\CustomerBenefitGrantDiscordPropertiesUpdate $properties
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('properties')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\CustomerBenefitGrantDiscordPropertiesUpdate')]
    public CustomerBenefitGrantDiscordPropertiesUpdate $properties;

    /**
     *
     * @var string $benefitType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('benefit_type')]
    public string $benefitType;

    /**
     * @param  string  $benefitType
     * @param  \Ruba\Models\Components\CustomerBenefitGrantDiscordPropertiesUpdate  $properties
     * @phpstan-pure
     */
    public function __construct(CustomerBenefitGrantDiscordPropertiesUpdate $properties, string $benefitType = 'discord')
    {
        $this->properties = $properties;
        $this->benefitType = $benefitType;
    }
}