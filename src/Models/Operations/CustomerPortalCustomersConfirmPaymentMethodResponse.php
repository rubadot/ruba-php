<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
class CustomerPortalCustomersConfirmPaymentMethodResponse
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
     * Payment method created or setup initiated.
     *
     * @var \Ruba\Models\Components\CustomerPaymentMethodCreateSucceededResponse|\Ruba\Models\Components\CustomerPaymentMethodCreateRequiresActionResponse|null $customerPaymentMethodCreateResponse
     */
    public Components\CustomerPaymentMethodCreateSucceededResponse|Components\CustomerPaymentMethodCreateRequiresActionResponse|null $customerPaymentMethodCreateResponse = null;

    /**
     * @param  string  $contentType
     * @param  int  $statusCode
     * @param  \Psr\Http\Message\ResponseInterface  $rawResponse
     * @param  \Ruba\Models\Components\CustomerPaymentMethodCreateSucceededResponse|\Ruba\Models\Components\CustomerPaymentMethodCreateRequiresActionResponse|null  $customerPaymentMethodCreateResponse
     * @phpstan-pure
     */
    public function __construct(string $contentType, int $statusCode, \Psr\Http\Message\ResponseInterface $rawResponse, Components\CustomerPaymentMethodCreateSucceededResponse|Components\CustomerPaymentMethodCreateRequiresActionResponse|null $customerPaymentMethodCreateResponse = null)
    {
        $this->contentType = $contentType;
        $this->statusCode = $statusCode;
        $this->rawResponse = $rawResponse;
        $this->customerPaymentMethodCreateResponse = $customerPaymentMethodCreateResponse;
    }
}