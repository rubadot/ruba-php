<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum FileServiceTypes: string
{
    case Downloadable = 'downloadable';
    case ProductMedia = 'product_media';
    case OrganizationAvatar = 'organization_avatar';
}
