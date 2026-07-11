<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class CustomFieldSelectOption
{
    /**
     *
     * @var string $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    public string $value;

    /**
     *
     * @var string $label
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('label')]
    public string $label;

    /**
     * @param  string  $value
     * @param  string  $label
     * @phpstan-pure
     */
    public function __construct(string $value, string $label)
    {
        $this->value = $value;
        $this->label = $label;
    }
}