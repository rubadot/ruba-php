<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum OrganizationSortProperty: string
{
    case CreatedAt = 'created_at';
    case MinusCreatedAt = '-created_at';
    case Slug = 'slug';
    case MinusSlug = '-slug';
    case Name = 'name';
    case MinusName = '-name';
    case NextReviewThreshold = 'next_review_threshold';
    case MinusNextReviewThreshold = '-next_review_threshold';
    case DaysInStatus = 'days_in_status';
    case MinusDaysInStatus = '-days_in_status';
}
