<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
class BenefitsUpdateResponse
{
    /**
     * HTTP response content type for this operation
     *
     * @var string $contentType
     */
    public string $contentType;

    /**
     * HTTP response status code for this operation
     *
     * @var int $statusCode
     */
    public int $statusCode;

    /**
     * Raw HTTP response; suitable for custom response parsing
     *
     * @var \Psr\Http\Message\ResponseInterface $rawResponse
     */
    public \Psr\Http\Message\ResponseInterface $rawResponse;

    /**
     * Benefit updated.
     *
     * @var \Ruba\Models\Components\BenefitCustom|\Ruba\Models\Components\BenefitDiscord|\Ruba\Models\Components\BenefitGitHubRepository|\Ruba\Models\Components\BenefitDownloadables|\Ruba\Models\Components\BenefitLicenseKeys|\Ruba\Models\Components\BenefitMeterCredit|\Ruba\Models\Components\BenefitFeatureFlag|null $benefit
     */
    public Components\BenefitCustom|Components\BenefitDiscord|Components\BenefitGitHubRepository|Components\BenefitDownloadables|Components\BenefitLicenseKeys|Components\BenefitMeterCredit|Components\BenefitFeatureFlag|null $benefit = null;

    /**
     * @param  string  $contentType
     * @param  int  $statusCode
     * @param  \Psr\Http\Message\ResponseInterface  $rawResponse
     * @param  \Ruba\Models\Components\BenefitCustom|\Ruba\Models\Components\BenefitDiscord|\Ruba\Models\Components\BenefitGitHubRepository|\Ruba\Models\Components\BenefitDownloadables|\Ruba\Models\Components\BenefitLicenseKeys|\Ruba\Models\Components\BenefitMeterCredit|\Ruba\Models\Components\BenefitFeatureFlag|null  $benefit
     * @phpstan-pure
     */
    public function __construct(string $contentType, int $statusCode, \Psr\Http\Message\ResponseInterface $rawResponse, Components\BenefitCustom|Components\BenefitDiscord|Components\BenefitGitHubRepository|Components\BenefitDownloadables|Components\BenefitLicenseKeys|Components\BenefitMeterCredit|Components\BenefitFeatureFlag|null $benefit = null)
    {
        $this->contentType = $contentType;
        $this->statusCode = $statusCode;
        $this->rawResponse = $rawResponse;
        $this->benefit = $benefit;
    }
}