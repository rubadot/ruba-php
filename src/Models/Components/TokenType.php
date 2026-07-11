<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum TokenType: string
{
    case AccessToken = 'access_token';
    case RefreshToken = 'refresh_token';
}
