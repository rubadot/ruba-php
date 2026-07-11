<?php

declare(strict_types=1);

namespace Ruba\Models\Errors;

use Ruba\Models\Components;
use Ruba\Utils;
class HTTPValidationError
{
    /**
     * $detail
     *
     * @var ?array<\Ruba\Models\Components\ValidationError> $detail
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('detail')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Ruba\Models\Components\ValidationError>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $detail = null;

    /**
     * @param  ?array<\Ruba\Models\Components\ValidationError>  $detail
     * @phpstan-pure
     */
    public function __construct(?array $detail = null)
    {
        $this->detail = $detail;
    }

    public function toException(): HTTPValidationErrorThrowable
    {
        $serializer = Utils\JSON::createSerializer();
        $message = $serializer->serialize($this, 'json');
        $code = -1;

        return new HTTPValidationErrorThrowable($message, (int) $code, $this);
    }
}