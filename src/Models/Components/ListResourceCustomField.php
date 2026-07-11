<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class ListResourceCustomField
{
    /**
     * $items
     *
     * @var array<\Ruba\Models\Components\CustomFieldText|\Ruba\Models\Components\CustomFieldNumber|\Ruba\Models\Components\CustomFieldDate|\Ruba\Models\Components\CustomFieldCheckbox|\Ruba\Models\Components\CustomFieldSelect> $items
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('items')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Ruba\Models\Components\CustomFieldText|\Ruba\Models\Components\CustomFieldNumber|\Ruba\Models\Components\CustomFieldDate|\Ruba\Models\Components\CustomFieldCheckbox|\Ruba\Models\Components\CustomFieldSelect>')]
    public array $items;

    /**
     *
     * @var \Ruba\Models\Components\Pagination $pagination
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pagination')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Pagination')]
    public Pagination $pagination;

    /**
     * @param  array<\Ruba\Models\Components\CustomFieldText|\Ruba\Models\Components\CustomFieldNumber|\Ruba\Models\Components\CustomFieldDate|\Ruba\Models\Components\CustomFieldCheckbox|\Ruba\Models\Components\CustomFieldSelect>  $items
     * @param  \Ruba\Models\Components\Pagination  $pagination
     * @phpstan-pure
     */
    public function __construct(array $items, Pagination $pagination)
    {
        $this->items = $items;
        $this->pagination = $pagination;
    }
}