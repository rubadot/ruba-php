<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
use Ruba\Utils\SpeakeasyMetadata;
class LicenseKeysUpdateRequest
{
    /**
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     *
     * @var \Ruba\Models\Components\LicenseKeyUpdate $licenseKeyUpdate
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\LicenseKeyUpdate $licenseKeyUpdate;

    /**
     * @param  string  $id
     * @param  \Ruba\Models\Components\LicenseKeyUpdate  $licenseKeyUpdate
     * @phpstan-pure
     */
    public function __construct(string $id, Components\LicenseKeyUpdate $licenseKeyUpdate)
    {
        $this->id = $id;
        $this->licenseKeyUpdate = $licenseKeyUpdate;
    }
}