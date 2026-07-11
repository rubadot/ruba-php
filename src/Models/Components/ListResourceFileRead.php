<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class ListResourceFileRead
{
    /**
     * $items
     *
     * @var array<\Ruba\Models\Components\DownloadableFileRead|\Ruba\Models\Components\ProductMediaFileRead|\Ruba\Models\Components\OrganizationAvatarFileRead> $items
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('items')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Ruba\Models\Components\DownloadableFileRead|\Ruba\Models\Components\ProductMediaFileRead|\Ruba\Models\Components\OrganizationAvatarFileRead>')]
    public array $items;

    /**
     *
     * @var \Ruba\Models\Components\Pagination $pagination
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pagination')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Pagination')]
    public Pagination $pagination;

    /**
     * @param  array<\Ruba\Models\Components\DownloadableFileRead|\Ruba\Models\Components\ProductMediaFileRead|\Ruba\Models\Components\OrganizationAvatarFileRead>  $items
     * @param  \Ruba\Models\Components\Pagination  $pagination
     * @phpstan-pure
     */
    public function __construct(array $items, Pagination $pagination)
    {
        $this->items = $items;
        $this->pagination = $pagination;
    }
}