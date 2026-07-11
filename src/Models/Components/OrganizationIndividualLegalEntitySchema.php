<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class OrganizationIndividualLegalEntitySchema
{
    /**
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     * @param  string  $type
     * @phpstan-pure
     */
    public function __construct(string $type = 'individual')
    {
        $this->type = $type;
    }
}