<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class CustomerBenefitGrantGitHubRepositoryUpdate
{
    /**
     *
     * @var \Ruba\Models\Components\CustomerBenefitGrantGitHubRepositoryPropertiesUpdate $properties
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('properties')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\CustomerBenefitGrantGitHubRepositoryPropertiesUpdate')]
    public CustomerBenefitGrantGitHubRepositoryPropertiesUpdate $properties;

    /**
     *
     * @var string $benefitType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('benefit_type')]
    public string $benefitType;

    /**
     * @param  string  $benefitType
     * @param  \Ruba\Models\Components\CustomerBenefitGrantGitHubRepositoryPropertiesUpdate  $properties
     * @phpstan-pure
     */
    public function __construct(CustomerBenefitGrantGitHubRepositoryPropertiesUpdate $properties, string $benefitType = 'github_repository')
    {
        $this->properties = $properties;
        $this->benefitType = $benefitType;
    }
}