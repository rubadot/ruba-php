<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
class Oauth2IntrospectTokenResponse
{
    /**
     * HTTP response content type for this operation
     *
     * @var string $contentType
     */
    public string $contentType;

    /**
     * HTTP response status code for this operation
     *
     * @var int $statusCode
     */
    public int $statusCode;

    /**
     * Raw HTTP response; suitable for custom response parsing
     *
     * @var \Psr\Http\Message\ResponseInterface $rawResponse
     */
    public \Psr\Http\Message\ResponseInterface $rawResponse;

    /**
     * Successful Response
     *
     * @var ?\Ruba\Models\Components\IntrospectTokenResponse $introspectTokenResponse
     */
    public ?Components\IntrospectTokenResponse $introspectTokenResponse = null;

    /**
     * @param  string  $contentType
     * @param  int  $statusCode
     * @param  \Psr\Http\Message\ResponseInterface  $rawResponse
     * @param  ?\Ruba\Models\Components\IntrospectTokenResponse  $introspectTokenResponse
     * @phpstan-pure
     */
    public function __construct(string $contentType, int $statusCode, \Psr\Http\Message\ResponseInterface $rawResponse, ?Components\IntrospectTokenResponse $introspectTokenResponse = null)
    {
        $this->contentType = $contentType;
        $this->statusCode = $statusCode;
        $this->rawResponse = $rawResponse;
        $this->introspectTokenResponse = $introspectTokenResponse;
    }
}