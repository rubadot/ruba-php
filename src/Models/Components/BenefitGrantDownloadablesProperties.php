<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class BenefitGrantDownloadablesProperties
{
    /**
     * $files
     *
     * @var ?array<string> $files
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('files')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $files = null;

    /**
     * @param  ?array<string>  $files
     * @phpstan-pure
     */
    public function __construct(?array $files = null)
    {
        $this->files = $files;
    }
}