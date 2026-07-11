<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
use Ruba\Utils\SpeakeasyMetadata;
class CustomerPortalBenefitGrantsUpdateRequest
{
    /**
     * The benefit grant ID.
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     *
     * @var \Ruba\Models\Components\CustomerBenefitGrantDiscordUpdate|\Ruba\Models\Components\CustomerBenefitGrantGitHubRepositoryUpdate|\Ruba\Models\Components\CustomerBenefitGrantDownloadablesUpdate|\Ruba\Models\Components\CustomerBenefitGrantLicenseKeysUpdate|\Ruba\Models\Components\CustomerBenefitGrantCustomUpdate|\Ruba\Models\Components\CustomerBenefitGrantMeterCreditUpdate|\Ruba\Models\Components\CustomerBenefitGrantFeatureFlagUpdate $customerBenefitGrantUpdate
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\CustomerBenefitGrantDiscordUpdate|Components\CustomerBenefitGrantGitHubRepositoryUpdate|Components\CustomerBenefitGrantDownloadablesUpdate|Components\CustomerBenefitGrantLicenseKeysUpdate|Components\CustomerBenefitGrantCustomUpdate|Components\CustomerBenefitGrantMeterCreditUpdate|Components\CustomerBenefitGrantFeatureFlagUpdate $customerBenefitGrantUpdate;

    /**
     * @param  string  $id
     * @param  \Ruba\Models\Components\CustomerBenefitGrantDiscordUpdate|\Ruba\Models\Components\CustomerBenefitGrantGitHubRepositoryUpdate|\Ruba\Models\Components\CustomerBenefitGrantDownloadablesUpdate|\Ruba\Models\Components\CustomerBenefitGrantLicenseKeysUpdate|\Ruba\Models\Components\CustomerBenefitGrantCustomUpdate|\Ruba\Models\Components\CustomerBenefitGrantMeterCreditUpdate|\Ruba\Models\Components\CustomerBenefitGrantFeatureFlagUpdate  $customerBenefitGrantUpdate
     * @phpstan-pure
     */
    public function __construct(string $id, Components\CustomerBenefitGrantDiscordUpdate|Components\CustomerBenefitGrantGitHubRepositoryUpdate|Components\CustomerBenefitGrantDownloadablesUpdate|Components\CustomerBenefitGrantLicenseKeysUpdate|Components\CustomerBenefitGrantCustomUpdate|Components\CustomerBenefitGrantMeterCreditUpdate|Components\CustomerBenefitGrantFeatureFlagUpdate $customerBenefitGrantUpdate)
    {
        $this->id = $id;
        $this->customerBenefitGrantUpdate = $customerBenefitGrantUpdate;
    }
}