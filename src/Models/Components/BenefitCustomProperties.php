<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/** BenefitCustomProperties - Properties for a benefit of type `custom`. */
class BenefitCustomProperties
{
    /**
     *
     * @var ?string $note
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('note')]
    public ?string $note;

    /**
     * @param  ?string  $note
     * @phpstan-pure
     */
    public function __construct(?string $note = null)
    {
        $this->note = $note;
    }
}