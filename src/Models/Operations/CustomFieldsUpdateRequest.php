<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
use Ruba\Utils\SpeakeasyMetadata;
class CustomFieldsUpdateRequest
{
    /**
     * The custom field ID.
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     *
     * @var \Ruba\Models\Components\CustomFieldUpdateText|\Ruba\Models\Components\CustomFieldUpdateNumber|\Ruba\Models\Components\CustomFieldUpdateDate|\Ruba\Models\Components\CustomFieldUpdateCheckbox|\Ruba\Models\Components\CustomFieldUpdateSelect $customFieldUpdate
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\CustomFieldUpdateText|Components\CustomFieldUpdateNumber|Components\CustomFieldUpdateDate|Components\CustomFieldUpdateCheckbox|Components\CustomFieldUpdateSelect $customFieldUpdate;

    /**
     * @param  string  $id
     * @param  \Ruba\Models\Components\CustomFieldUpdateText|\Ruba\Models\Components\CustomFieldUpdateNumber|\Ruba\Models\Components\CustomFieldUpdateDate|\Ruba\Models\Components\CustomFieldUpdateCheckbox|\Ruba\Models\Components\CustomFieldUpdateSelect  $customFieldUpdate
     * @phpstan-pure
     */
    public function __construct(string $id, Components\CustomFieldUpdateText|Components\CustomFieldUpdateNumber|Components\CustomFieldUpdateDate|Components\CustomFieldUpdateCheckbox|Components\CustomFieldUpdateSelect $customFieldUpdate)
    {
        $this->id = $id;
        $this->customFieldUpdate = $customFieldUpdate;
    }
}