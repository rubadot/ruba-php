<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum BenefitGrantSortProperty: string
{
    case CreatedAt = 'created_at';
    case MinusCreatedAt = '-created_at';
    case GrantedAt = 'granted_at';
    case MinusGrantedAt = '-granted_at';
    case RevokedAt = 'revoked_at';
    case MinusRevokedAt = '-revoked_at';
}
