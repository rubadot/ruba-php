<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/** CustomerSeatClaimResponse - Response after successfully claiming a seat. */
class CustomerSeatClaimResponse
{
    /**
     *
     * @var \Ruba\Models\Components\CustomerSeat $seat
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('seat')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\CustomerSeat')]
    public CustomerSeat $seat;

    /**
     * Session token for immediate customer portal access
     *
     * @var string $customerSessionToken
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_session_token')]
    public string $customerSessionToken;

    /**
     * @param  \Ruba\Models\Components\CustomerSeat  $seat
     * @param  string  $customerSessionToken
     * @phpstan-pure
     */
    public function __construct(CustomerSeat $seat, string $customerSessionToken)
    {
        $this->seat = $seat;
        $this->customerSessionToken = $customerSessionToken;
    }
}