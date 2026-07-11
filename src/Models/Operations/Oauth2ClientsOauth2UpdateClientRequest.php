<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
use Ruba\Utils\SpeakeasyMetadata;
class Oauth2ClientsOauth2UpdateClientRequest
{
    /**
     *
     * @var string $clientId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=client_id')]
    public string $clientId;

    /**
     *
     * @var \Ruba\Models\Components\OAuth2ClientConfigurationUpdate $oAuth2ClientConfigurationUpdate
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\OAuth2ClientConfigurationUpdate $oAuth2ClientConfigurationUpdate;

    /**
     * @param  string  $clientId
     * @param  \Ruba\Models\Components\OAuth2ClientConfigurationUpdate  $oAuth2ClientConfigurationUpdate
     * @phpstan-pure
     */
    public function __construct(string $clientId, Components\OAuth2ClientConfigurationUpdate $oAuth2ClientConfigurationUpdate)
    {
        $this->clientId = $clientId;
        $this->oAuth2ClientConfigurationUpdate = $oAuth2ClientConfigurationUpdate;
    }
}