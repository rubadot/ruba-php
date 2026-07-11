<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum ProductSortProperty: string
{
    case CreatedAt = 'created_at';
    case MinusCreatedAt = '-created_at';
    case Name = 'name';
    case MinusName = '-name';
    case PriceAmountType = 'price_amount_type';
    case MinusPriceAmountType = '-price_amount_type';
    case PriceAmount = 'price_amount';
    case MinusPriceAmount = '-price_amount';
}
