<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class DownloadableRead
{
    /**
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var string $benefitId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('benefit_id')]
    public string $benefitId;

    /**
     *
     * @var \Ruba\Models\Components\FileDownload $file
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('file')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\FileDownload')]
    public FileDownload $file;

    /**
     * @param  string  $id
     * @param  string  $benefitId
     * @param  \Ruba\Models\Components\FileDownload  $file
     * @phpstan-pure
     */
    public function __construct(string $id, string $benefitId, FileDownload $file)
    {
        $this->id = $id;
        $this->benefitId = $benefitId;
        $this->file = $file;
    }
}