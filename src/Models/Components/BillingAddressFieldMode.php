<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum BillingAddressFieldMode: string
{
    case Required = 'required';
    case Optional = 'optional';
    case Disabled = 'disabled';
}
