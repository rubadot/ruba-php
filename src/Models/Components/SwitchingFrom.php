<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum SwitchingFrom: string
{
    case Paddle = 'paddle';
    case LemonSqueezy = 'lemon_squeezy';
    case Gumroad = 'gumroad';
    case Stripe = 'stripe';
    case Other = 'other';
}
