<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
class CheckoutsClientConfirmResponse
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
     * Checkout session confirmed.
     *
     * @var ?\Ruba\Models\Components\CheckoutPublicConfirmed $checkoutPublicConfirmed
     */
    public ?Components\CheckoutPublicConfirmed $checkoutPublicConfirmed = null;

    /**
     * @param  string  $contentType
     * @param  int  $statusCode
     * @param  \Psr\Http\Message\ResponseInterface  $rawResponse
     * @param  ?\Ruba\Models\Components\CheckoutPublicConfirmed  $checkoutPublicConfirmed
     * @phpstan-pure
     */
    public function __construct(string $contentType, int $statusCode, \Psr\Http\Message\ResponseInterface $rawResponse, ?Components\CheckoutPublicConfirmed $checkoutPublicConfirmed = null)
    {
        $this->contentType = $contentType;
        $this->statusCode = $statusCode;
        $this->rawResponse = $rawResponse;
        $this->checkoutPublicConfirmed = $checkoutPublicConfirmed;
    }
}