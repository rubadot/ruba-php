<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class CountAggregation
{
    /**
     *
     * @var ?string $func
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('func')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $func = null;

    /**
     * @param  ?string  $func
     * @phpstan-pure
     */
    public function __construct(?string $func = 'count')
    {
        $this->func = $func;
    }
}