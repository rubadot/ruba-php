<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Utils\SpeakeasyMetadata;
class CheckoutsClientGetRequest
{
    /**
     * The checkout session client secret.
     *
     * @var string $clientSecret
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=client_secret')]
    public string $clientSecret;

    /**
     * @param  string  $clientSecret
     * @phpstan-pure
     */
    public function __construct(string $clientSecret)
    {
        $this->clientSecret = $clientSecret;
    }
}