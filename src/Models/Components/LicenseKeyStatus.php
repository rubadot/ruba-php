<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum LicenseKeyStatus: string
{
    case Granted = 'granted';
    case Revoked = 'revoked';
    case Disabled = 'disabled';
}
