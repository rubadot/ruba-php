<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class CustomerPortalUsageSettings
{
    /**
     *
     * @var bool $show
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('show')]
    public bool $show;

    /**
     * @param  bool  $show
     * @phpstan-pure
     */
    public function __construct(bool $show)
    {
        $this->show = $show;
    }
}