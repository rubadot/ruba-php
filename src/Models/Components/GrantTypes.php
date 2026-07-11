<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum GrantTypes: string
{
    case AuthorizationCode = 'authorization_code';
    case RefreshToken = 'refresh_token';
}
