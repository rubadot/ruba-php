<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum CheckoutLinkSortProperty: string
{
    case CreatedAt = 'created_at';
    case MinusCreatedAt = '-created_at';
    case Label = 'label';
    case MinusLabel = '-label';
    case SuccessUrl = 'success_url';
    case MinusSuccessUrl = '-success_url';
    case AllowDiscountCodes = 'allow_discount_codes';
    case MinusAllowDiscountCodes = '-allow_discount_codes';
}
