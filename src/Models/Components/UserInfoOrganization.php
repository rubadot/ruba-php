<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class UserInfoOrganization
{
    /**
     *
     * @var string $sub
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sub')]
    public string $sub;

    /**
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * @param  string  $sub
     * @param  ?string  $name
     * @phpstan-pure
     */
    public function __construct(string $sub, ?string $name = null)
    {
        $this->sub = $sub;
        $this->name = $name;
    }
}