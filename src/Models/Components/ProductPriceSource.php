<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum ProductPriceSource: string
{
    case Catalog = 'catalog';
    case AdHoc = 'ad_hoc';
}
