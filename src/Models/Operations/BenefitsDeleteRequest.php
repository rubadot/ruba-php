<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Utils\SpeakeasyMetadata;
class BenefitsDeleteRequest
{
    /**
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     * @param  string  $id
     * @phpstan-pure
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
}