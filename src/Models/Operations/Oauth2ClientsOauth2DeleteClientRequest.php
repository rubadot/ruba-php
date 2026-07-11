<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Utils\SpeakeasyMetadata;
class Oauth2ClientsOauth2DeleteClientRequest
{
    /**
     *
     * @var string $clientId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=client_id')]
    public string $clientId;

    /**
     * @param  string  $clientId
     * @phpstan-pure
     */
    public function __construct(string $clientId)
    {
        $this->clientId = $clientId;
    }
}