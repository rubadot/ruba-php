<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class ListResourcePayment
{
    /**
     * $items
     *
     * @var array<\Ruba\Models\Components\CardPayment|\Ruba\Models\Components\GenericPayment> $items
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('items')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Ruba\Models\Components\CardPayment|\Ruba\Models\Components\GenericPayment>')]
    public array $items;

    /**
     *
     * @var \Ruba\Models\Components\Pagination $pagination
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pagination')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Pagination')]
    public Pagination $pagination;

    /**
     * @param  array<\Ruba\Models\Components\CardPayment|\Ruba\Models\Components\GenericPayment>  $items
     * @param  \Ruba\Models\Components\Pagination  $pagination
     * @phpstan-pure
     */
    public function __construct(array $items, Pagination $pagination)
    {
        $this->items = $items;
        $this->pagination = $pagination;
    }
}