<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class CustomerBenefitGrantDiscordPropertiesUpdate
{
    /**
     *
     * @var ?string $accountId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('account_id')]
    public ?string $accountId;

    /**
     * @param  ?string  $accountId
     * @phpstan-pure
     */
    public function __construct(?string $accountId = null)
    {
        $this->accountId = $accountId;
    }
}