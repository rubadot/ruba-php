<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum TokenEndpointAuthMethod: string
{
    case ClientSecretBasic = 'client_secret_basic';
    case ClientSecretPost = 'client_secret_post';
    case None = 'none';
}
