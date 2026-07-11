<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
class FilesUploadedResponse
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
     * File upload completed.
     *
     * @var \Ruba\Models\Components\DownloadableFileRead|\Ruba\Models\Components\ProductMediaFileRead|\Ruba\Models\Components\OrganizationAvatarFileRead|null $responseFilesUploaded
     */
    public Components\DownloadableFileRead|Components\ProductMediaFileRead|Components\OrganizationAvatarFileRead|null $responseFilesUploaded = null;

    /**
     * @param  string  $contentType
     * @param  int  $statusCode
     * @param  \Psr\Http\Message\ResponseInterface  $rawResponse
     * @param  \Ruba\Models\Components\DownloadableFileRead|\Ruba\Models\Components\ProductMediaFileRead|\Ruba\Models\Components\OrganizationAvatarFileRead|null  $responseFilesUploaded
     * @phpstan-pure
     */
    public function __construct(string $contentType, int $statusCode, \Psr\Http\Message\ResponseInterface $rawResponse, Components\DownloadableFileRead|Components\ProductMediaFileRead|Components\OrganizationAvatarFileRead|null $responseFilesUploaded = null)
    {
        $this->contentType = $contentType;
        $this->statusCode = $statusCode;
        $this->rawResponse = $rawResponse;
        $this->responseFilesUploaded = $responseFilesUploaded;
    }
}