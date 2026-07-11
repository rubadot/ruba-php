<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum PaymentProcessor: string
{
    case Stripe = 'stripe';
}
