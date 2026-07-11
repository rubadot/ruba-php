<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Utils\SpeakeasyMetadata;
class CustomerPortalOrganizationsGetRequest
{
    /**
     * The organization slug.
     *
     * @var string $slug
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=slug')]
    public string $slug;

    /**
     * @param  string  $slug
     * @phpstan-pure
     */
    public function __construct(string $slug)
    {
        $this->slug = $slug;
    }
}