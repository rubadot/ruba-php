<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class ListResourceCustomerBenefitGrant
{
    /**
     * $items
     *
     * @var array<\Ruba\Models\Components\CustomerBenefitGrantDiscord|\Ruba\Models\Components\CustomerBenefitGrantGitHubRepository|\Ruba\Models\Components\CustomerBenefitGrantDownloadables|\Ruba\Models\Components\CustomerBenefitGrantLicenseKeys|\Ruba\Models\Components\CustomerBenefitGrantCustom|\Ruba\Models\Components\CustomerBenefitGrantMeterCredit|\Ruba\Models\Components\CustomerBenefitGrantFeatureFlag> $items
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('items')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Ruba\Models\Components\CustomerBenefitGrantDiscord|\Ruba\Models\Components\CustomerBenefitGrantGitHubRepository|\Ruba\Models\Components\CustomerBenefitGrantDownloadables|\Ruba\Models\Components\CustomerBenefitGrantLicenseKeys|\Ruba\Models\Components\CustomerBenefitGrantCustom|\Ruba\Models\Components\CustomerBenefitGrantMeterCredit|\Ruba\Models\Components\CustomerBenefitGrantFeatureFlag>')]
    public array $items;

    /**
     *
     * @var \Ruba\Models\Components\Pagination $pagination
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pagination')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Pagination')]
    public Pagination $pagination;

    /**
     * @param  array<\Ruba\Models\Components\CustomerBenefitGrantDiscord|\Ruba\Models\Components\CustomerBenefitGrantGitHubRepository|\Ruba\Models\Components\CustomerBenefitGrantDownloadables|\Ruba\Models\Components\CustomerBenefitGrantLicenseKeys|\Ruba\Models\Components\CustomerBenefitGrantCustom|\Ruba\Models\Components\CustomerBenefitGrantMeterCredit|\Ruba\Models\Components\CustomerBenefitGrantFeatureFlag>  $items
     * @param  \Ruba\Models\Components\Pagination  $pagination
     * @phpstan-pure
     */
    public function __construct(array $items, Pagination $pagination)
    {
        $this->items = $items;
        $this->pagination = $pagination;
    }
}