<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/** CustomerOrderInvoice - Order's invoice data. */
class CustomerOrderInvoice
{
    /**
     * The URL to the invoice.
     *
     * @var string $url
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('url')]
    public string $url;

    /**
     * @param  string  $url
     * @phpstan-pure
     */
    public function __construct(string $url)
    {
        $this->url = $url;
    }
}