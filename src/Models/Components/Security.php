<?php

declare(strict_types=1);

namespace Ruba\Models\Components;

use Ruba\Utils\SpeakeasyMetadata;
class Security
{
    /**
     *
     * @var ?string $accessToken
     */
    #[SpeakeasyMetadata('security:scheme=true,type=http,subtype=bearer,name=Authorization')]
    public ?string $accessToken = null;

    /**
     * @param  ?string  $accessToken
     * @phpstan-pure
     */
    public function __construct(?string $accessToken = null)
    {
        $this->accessToken = $accessToken;
    }
}