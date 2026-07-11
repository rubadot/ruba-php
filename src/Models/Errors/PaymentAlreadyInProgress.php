<?php

declare(strict_types=1);

namespace Ruba\Models\Errors;

use Ruba\Utils;
class PaymentAlreadyInProgress
{
    /**
     *
     * @var string $error
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('error')]
    public string $error;

    /**
     *
     * @var string $detail
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('detail')]
    public string $detail;

    /**
     * @param  string  $error
     * @param  string  $detail
     * @phpstan-pure
     */
    public function __construct(string $detail, string $error = 'PaymentAlreadyInProgress')
    {
        $this->error = $error;
        $this->detail = $detail;
    }

    public function toException(): PaymentAlreadyInProgressThrowable
    {
        $serializer = Utils\JSON::createSerializer();
        $message = $serializer->serialize($this, 'json');
        $code = -1;

        return new PaymentAlreadyInProgressThrowable($message, (int) $code, $this);
    }
}