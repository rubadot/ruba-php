<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class Filter
{
    /**
     *
     * @var \Ruba\Models\Components\FilterConjunction $conjunction
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('conjunction')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\FilterConjunction')]
    public FilterConjunction $conjunction;

    /**
     * $clauses
     *
     * @var array<\Ruba\Models\Components\FilterClause|\Ruba\Models\Components\Filter> $clauses
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('clauses')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Ruba\Models\Components\FilterClause|\Ruba\Models\Components\Filter>')]
    public array $clauses;

    /**
     * @param  \Ruba\Models\Components\FilterConjunction  $conjunction
     * @param  array<\Ruba\Models\Components\FilterClause|\Ruba\Models\Components\Filter>  $clauses
     * @phpstan-pure
     */
    public function __construct(FilterConjunction $conjunction, array $clauses)
    {
        $this->conjunction = $conjunction;
        $this->clauses = $clauses;
    }
}