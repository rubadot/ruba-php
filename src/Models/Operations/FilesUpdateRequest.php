<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
use Ruba\Utils\SpeakeasyMetadata;
class FilesUpdateRequest
{
    /**
     * The file ID.
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     *
     * @var \Ruba\Models\Components\FilePatch $filePatch
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\FilePatch $filePatch;

    /**
     * @param  string  $id
     * @param  \Ruba\Models\Components\FilePatch  $filePatch
     * @phpstan-pure
     */
    public function __construct(string $id, Components\FilePatch $filePatch)
    {
        $this->id = $id;
        $this->filePatch = $filePatch;
    }
}