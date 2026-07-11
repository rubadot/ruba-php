<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class SeatsList
{
    /**
     * List of seats
     *
     * @var array<\Ruba\Models\Components\CustomerSeat> $seats
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('seats')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Ruba\Models\Components\CustomerSeat>')]
    public array $seats;

    /**
     * Number of available seats
     *
     * @var int $availableSeats
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('available_seats')]
    public int $availableSeats;

    /**
     * Total number of seats for the subscription
     *
     * @var int $totalSeats
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('total_seats')]
    public int $totalSeats;

    /**
     * @param  array<\Ruba\Models\Components\CustomerSeat>  $seats
     * @param  int  $availableSeats
     * @param  int  $totalSeats
     * @phpstan-pure
     */
    public function __construct(array $seats, int $availableSeats, int $totalSeats)
    {
        $this->seats = $seats;
        $this->availableSeats = $availableSeats;
        $this->totalSeats = $totalSeats;
    }
}