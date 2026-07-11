<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class CustomerPaymentMethodCreateSucceededResponse
{
    /**
     *
     * @var \Ruba\Models\Components\PaymentMethodCard|\Ruba\Models\Components\PaymentMethodGeneric $paymentMethod
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('payment_method')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\PaymentMethodCard|\Ruba\Models\Components\PaymentMethodGeneric')]
    public PaymentMethodCard|PaymentMethodGeneric $paymentMethod;

    /**
     *
     * @var string $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    public string $status;

    /**
     * @param  string  $status
     * @param  \Ruba\Models\Components\PaymentMethodCard|\Ruba\Models\Components\PaymentMethodGeneric  $paymentMethod
     * @phpstan-pure
     */
    public function __construct(PaymentMethodCard|PaymentMethodGeneric $paymentMethod, string $status = 'succeeded')
    {
        $this->paymentMethod = $paymentMethod;
        $this->status = $status;
    }
}