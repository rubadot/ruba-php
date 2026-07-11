<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
use Ruba\Utils\SpeakeasyMetadata;
class FilesUploadedRequest
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
     * @var \Ruba\Models\Components\FileUploadCompleted $fileUploadCompleted
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\FileUploadCompleted $fileUploadCompleted;

    /**
     * @param  string  $id
     * @param  \Ruba\Models\Components\FileUploadCompleted  $fileUploadCompleted
     * @phpstan-pure
     */
    public function __construct(string $id, Components\FileUploadCompleted $fileUploadCompleted)
    {
        $this->id = $id;
        $this->fileUploadCompleted = $fileUploadCompleted;
    }
}