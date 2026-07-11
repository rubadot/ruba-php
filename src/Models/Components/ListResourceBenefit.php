<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class ListResourceBenefit
{
    /**
     * $items
     *
     * @var array<\Ruba\Models\Components\BenefitCustom|\Ruba\Models\Components\BenefitDiscord|\Ruba\Models\Components\BenefitGitHubRepository|\Ruba\Models\Components\BenefitDownloadables|\Ruba\Models\Components\BenefitLicenseKeys|\Ruba\Models\Components\BenefitMeterCredit|\Ruba\Models\Components\BenefitFeatureFlag> $items
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('items')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Ruba\Models\Components\BenefitCustom|\Ruba\Models\Components\BenefitDiscord|\Ruba\Models\Components\BenefitGitHubRepository|\Ruba\Models\Components\BenefitDownloadables|\Ruba\Models\Components\BenefitLicenseKeys|\Ruba\Models\Components\BenefitMeterCredit|\Ruba\Models\Components\BenefitFeatureFlag>')]
    public array $items;

    /**
     *
     * @var \Ruba\Models\Components\Pagination $pagination
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pagination')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Pagination')]
    public Pagination $pagination;

    /**
     * @param  array<\Ruba\Models\Components\BenefitCustom|\Ruba\Models\Components\BenefitDiscord|\Ruba\Models\Components\BenefitGitHubRepository|\Ruba\Models\Components\BenefitDownloadables|\Ruba\Models\Components\BenefitLicenseKeys|\Ruba\Models\Components\BenefitMeterCredit|\Ruba\Models\Components\BenefitFeatureFlag>  $items
     * @param  \Ruba\Models\Components\Pagination  $pagination
     * @phpstan-pure
     */
    public function __construct(array $items, Pagination $pagination)
    {
        $this->items = $items;
        $this->pagination = $pagination;
    }
}