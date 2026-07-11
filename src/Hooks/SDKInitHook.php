<?php


declare(strict_types=1);

namespace Ruba\Hooks;

interface SDKInitHook
{
    public function sdkInit(string $baseUrl, \GuzzleHttp\ClientInterface $client): SDKRequestContext;
}
