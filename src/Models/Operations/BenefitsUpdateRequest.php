<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
use Ruba\Utils\SpeakeasyMetadata;
class BenefitsUpdateRequest
{
    /**
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     *
     * @var \Ruba\Models\Components\BenefitCustomUpdate|\Ruba\Models\Components\BenefitDiscordUpdate|\Ruba\Models\Components\BenefitGitHubRepositoryUpdate|\Ruba\Models\Components\BenefitDownloadablesUpdate|\Ruba\Models\Components\BenefitLicenseKeysUpdate|\Ruba\Models\Components\BenefitMeterCreditUpdate|\Ruba\Models\Components\BenefitFeatureFlagUpdate $requestBody
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\BenefitCustomUpdate|Components\BenefitDiscordUpdate|Components\BenefitGitHubRepositoryUpdate|Components\BenefitDownloadablesUpdate|Components\BenefitLicenseKeysUpdate|Components\BenefitMeterCreditUpdate|Components\BenefitFeatureFlagUpdate $requestBody;

    /**
     * @param  string  $id
     * @param  \Ruba\Models\Components\BenefitCustomUpdate|\Ruba\Models\Components\BenefitDiscordUpdate|\Ruba\Models\Components\BenefitGitHubRepositoryUpdate|\Ruba\Models\Components\BenefitDownloadablesUpdate|\Ruba\Models\Components\BenefitLicenseKeysUpdate|\Ruba\Models\Components\BenefitMeterCreditUpdate|\Ruba\Models\Components\BenefitFeatureFlagUpdate  $requestBody
     * @phpstan-pure
     */
    public function __construct(string $id, Components\BenefitCustomUpdate|Components\BenefitDiscordUpdate|Components\BenefitGitHubRepositoryUpdate|Components\BenefitDownloadablesUpdate|Components\BenefitLicenseKeysUpdate|Components\BenefitMeterCreditUpdate|Components\BenefitFeatureFlagUpdate $requestBody)
    {
        $this->id = $id;
        $this->requestBody = $requestBody;
    }
}