<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
use Ruba\Utils\SpeakeasyMetadata;
class CheckoutsClientUpdateRequest
{
    /**
     * The checkout session client secret.
     *
     * @var string $clientSecret
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=client_secret')]
    public string $clientSecret;

    /**
     *
     * @var \Ruba\Models\Components\CheckoutUpdatePublic $checkoutUpdatePublic
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\CheckoutUpdatePublic $checkoutUpdatePublic;

    /**
     * @param  string  $clientSecret
     * @param  \Ruba\Models\Components\CheckoutUpdatePublic  $checkoutUpdatePublic
     * @phpstan-pure
     */
    public function __construct(string $clientSecret, Components\CheckoutUpdatePublic $checkoutUpdatePublic)
    {
        $this->clientSecret = $clientSecret;
        $this->checkoutUpdatePublic = $checkoutUpdatePublic;
    }
}