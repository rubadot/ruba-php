<?php

declare(strict_types=1);

namespace Ruba\Models\Components;

use Ruba\Utils\SpeakeasyMetadata;
class IntrospectTokenRequest
{
    /**
     *
     * @var string $token
     */
    #[SpeakeasyMetadata('form:name=token')]
    public string $token;

    /**
     *
     * @var string $clientId
     */
    #[SpeakeasyMetadata('form:name=client_id')]
    public string $clientId;

    /**
     *
     * @var string $clientSecret
     */
    #[SpeakeasyMetadata('form:name=client_secret')]
    public string $clientSecret;

    /**
     *
     * @var ?\Ruba\Models\Components\IntrospectTokenRequestTokenTypeHint $tokenTypeHint
     */
    #[SpeakeasyMetadata('form:name=token_type_hint')]
    public ?IntrospectTokenRequestTokenTypeHint $tokenTypeHint = null;

    /**
     * @param  string  $token
     * @param  string  $clientId
     * @param  string  $clientSecret
     * @param  ?\Ruba\Models\Components\IntrospectTokenRequestTokenTypeHint  $tokenTypeHint
     * @phpstan-pure
     */
    public function __construct(string $token, string $clientId, string $clientSecret, ?IntrospectTokenRequestTokenTypeHint $tokenTypeHint = null)
    {
        $this->token = $token;
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->tokenTypeHint = $tokenTypeHint;
    }
}