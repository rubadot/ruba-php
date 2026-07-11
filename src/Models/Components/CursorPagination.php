<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class CursorPagination
{
    /**
     *
     * @var bool $hasNextPage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('has_next_page')]
    public bool $hasNextPage;

    /**
     * @param  bool  $hasNextPage
     * @phpstan-pure
     */
    public function __construct(bool $hasNextPage)
    {
        $this->hasNextPage = $hasNextPage;
    }
}