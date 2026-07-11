<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum CustomerBenefitGrantSortProperty: string
{
    case GrantedAt = 'granted_at';
    case MinusGrantedAt = '-granted_at';
    case Type = 'type';
    case MinusType = '-type';
    case Organization = 'organization';
    case MinusOrganization = '-organization';
    case ProductBenefit = 'product_benefit';
    case MinusProductBenefit = '-product_benefit';
}
