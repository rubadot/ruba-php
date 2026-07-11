<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
use Ruba\Utils\SpeakeasyMetadata;
class CustomerPortalWalletsListRequest
{
    /**
     * Sorting criterion. Several criteria can be used simultaneously and will be applied in order. Add a minus sign `-` before the criteria name to sort by descending order.
     *
     * @var ?array<\Ruba\Models\Components\CustomerWalletSortProperty> $sorting
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sorting')]
    public ?array $sorting = null;

    /**
     * Page number, defaults to 1.
     *
     * @var ?int $page
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page')]
    public ?int $page = null;

    /**
     * Size of a page, defaults to 10. Maximum is 100.
     *
     * @var ?int $limit
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?int $limit = null;

    /**
     * @param  ?int  $page
     * @param  ?int  $limit
     * @param  ?array<\Ruba\Models\Components\CustomerWalletSortProperty>  $sorting
     * @phpstan-pure
     */
    public function __construct(?array $sorting = null, ?int $page = 1, ?int $limit = 10)
    {
        $this->sorting = $sorting;
        $this->page = $page;
        $this->limit = $limit;
    }
}