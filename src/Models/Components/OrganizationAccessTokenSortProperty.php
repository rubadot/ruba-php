<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum OrganizationAccessTokenSortProperty: string
{
    case CreatedAt = 'created_at';
    case MinusCreatedAt = '-created_at';
    case Comment = 'comment';
    case MinusComment = '-comment';
    case LastUsedAt = 'last_used_at';
    case MinusLastUsedAt = '-last_used_at';
    case OrganizationId = 'organization_id';
    case MinusOrganizationId = '-organization_id';
}
