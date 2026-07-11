<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class S3FileCreateMultipart
{
    /**
     * $parts
     *
     * @var array<\Ruba\Models\Components\S3FileCreatePart> $parts
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parts')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Ruba\Models\Components\S3FileCreatePart>')]
    public array $parts;

    /**
     * @param  array<\Ruba\Models\Components\S3FileCreatePart>  $parts
     * @phpstan-pure
     */
    public function __construct(array $parts)
    {
        $this->parts = $parts;
    }
}