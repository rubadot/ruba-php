<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
class CustomFieldsListResponse
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
     * @var ?\Ruba\Models\Components\ListResourceCustomField $listResourceCustomField
     */
    public ?Components\ListResourceCustomField $listResourceCustomField = null;

    /**
     * @var \Closure(string): ?CustomFieldsListResponse $next
     */
    public \Closure $next;
    /**
     * @param  string  $contentType
     * @param  int  $statusCode
     * @param  \Psr\Http\Message\ResponseInterface  $rawResponse
     * @param  ?\Ruba\Models\Components\ListResourceCustomField  $listResourceCustomField
     * @phpstan-pure
     */
    public function __construct(string $contentType, int $statusCode, \Psr\Http\Message\ResponseInterface $rawResponse, ?Components\ListResourceCustomField $listResourceCustomField = null)
    {
        $this->contentType = $contentType;
        $this->statusCode = $statusCode;
        $this->rawResponse = $rawResponse;
        $this->listResourceCustomField = $listResourceCustomField;
    }
    /**
     * @param  string  $name
     * @param  array<mixed>  $args
     * @return ?CustomFieldsListResponse
     */
    public function __call($name, $args): ?CustomFieldsListResponse
    {
        if ($name === 'next') {
            return call_user_func_array($this->next, $args);
        }

        return null;
    }
}