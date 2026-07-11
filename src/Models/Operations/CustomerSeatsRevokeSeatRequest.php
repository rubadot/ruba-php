<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Utils\SpeakeasyMetadata;
class CustomerSeatsRevokeSeatRequest
{
    /**
     *
     * @var string $seatId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=seat_id')]
    public string $seatId;

    /**
     * @param  string  $seatId
     * @phpstan-pure
     */
    public function __construct(string $seatId)
    {
        $this->seatId = $seatId;
    }
}