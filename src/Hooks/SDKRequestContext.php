<?php


declare(strict_types=1);

namespace Ruba\Hooks;

class SDKRequestContext
{
    public string $url;
    public \GuzzleHttp\ClientInterface $client;

    public function __construct(string $url, \GuzzleHttp\ClientInterface $client)
    {
        $this->url = $url;
        $this->client = $client;
    }
}