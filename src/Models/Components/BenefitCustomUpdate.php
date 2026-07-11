<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class BenefitCustomUpdate
{
    /**
     * Key-value object allowing you to store additional information.
     *
     *
     * The key must be a string with a maximum length of **40 characters**.
     * The value must be either:
     *
     * * A string with a maximum length of **500 characters**
     * * An integer
     * * A floating-point number
     * * A boolean
     *
     * You can store up to **50 key-value pairs**.
     *
     * @var ?array<string, string|int|float|bool> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string|int|float|bool>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $metadata = null;

    /**
     * The description of the benefit. Will be displayed on products having this benefit.
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     *
     * @var ?\Ruba\Models\Components\BenefitCustomProperties $properties
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('properties')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\BenefitCustomProperties|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?BenefitCustomProperties $properties = null;

    /**
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     * @param  string  $type
     * @param  ?array<string, string|int|float|bool>  $metadata
     * @param  ?string  $description
     * @param  ?\Ruba\Models\Components\BenefitCustomProperties  $properties
     * @phpstan-pure
     */
    public function __construct(?array $metadata = null, ?string $description = null, ?BenefitCustomProperties $properties = null, string $type = 'custom')
    {
        $this->metadata = $metadata;
        $this->description = $description;
        $this->properties = $properties;
        $this->type = $type;
    }
}