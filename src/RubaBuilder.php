<?php

declare(strict_types=1);

namespace Ruba;

use Ruba\Utils\Retry;

/**
 * RubaBuilder is used to configure and build an instance of the SDK.
 */
class RubaBuilder
{
    public function __construct(
        private SDKConfiguration $sdkConfig = new SDKConfiguration(),
    ) {
    }

    /**
     * setClient allows setting a custom Guzzle client for the SDK to make requests with.
     *
     * @param  \GuzzleHttp\ClientInterface  $client
     * @return RubaBuilder
     */
    public function setClient(\GuzzleHttp\ClientInterface $client): RubaBuilder
    {
        $this->sdkConfig->client = $client;

        return $this;
    }

    /**
     * setSecurity is used to configure the security required for the SDK.
     *
     * @param  string  $accessToken
     * @return RubaBuilder
     */
    public function setSecurity(string $accessToken): RubaBuilder
    {
        $security = new Models\Components\Security(
            accessToken: $accessToken
        );
        $this->sdkConfig->securitySource = fn () => $security;

        return $this;
    }

    /**
     * setSecuritySource is usd to configure the security required for the SDK.
     * unlike setSecurity, setSecuritySource accepts a closure that will be called to retrieve the security information.
     *
     * @param  pure-Closure(): string  $securitySource
     * @return RubaBuilder
     */
    public function setSecuritySource(\Closure $securitySource): RubaBuilder
    {
        $this->sdkConfig->securitySource = fn () => new Models\Components\Security(accessToken: $securitySource());

        return $this;
    }

    /**
     * setServerUrl is used to configure the server URL for the SDK, and optionally template any parameters in the URL.
     *
     * @param  string  $serverUrl
     * @param  array<string, string>  $params
     * @return RubaBuilder
     */
    public function setServerUrl(string $serverUrl, ?array $params = null): RubaBuilder
    {
        $this->sdkConfig->serverUrl = Utils\Utils::templateUrl($serverUrl, $params);

        return $this;
    }

    /**
     * setServer is used to configure the server for the SDK
     *
     * @param  string  $server
     * @return RubaBuilder
     */
    public function setServer(string $server): RubaBuilder
    {
        $this->sdkConfig->server = $server;

        return $this;
    }

    public function setRetryConfig(Retry\RetryConfig $config): RubaBuilder
    {
        $this->sdkConfig->retryConfig = $config;

        return $this;
    }

    /**
     * build is used to build the SDK with any of the configured options.
     *
     * @return Ruba
     */
    public function build(): Ruba
    {
        if ($this->sdkConfig->client === null) {
            $this->sdkConfig->client = new \GuzzleHttp\Client([
                'timeout' => 60,
            ]);
        }

        $this->sdkConfig->defaultClient = $this->sdkConfig->client;
        if ($this->sdkConfig->hasSecurity()) {
            $this->sdkConfig->client = Utils\Utils::configureSecurityClient($this->sdkConfig->client, $this->sdkConfig->getSecurity());
        }

        return new Ruba($this->sdkConfig);
    }
}