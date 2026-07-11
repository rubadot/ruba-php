<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/** BenefitDiscordSubscriberProperties - Properties available to subscribers for a benefit of type `discord`. */
class BenefitDiscordSubscriberProperties
{
    /**
     * The ID of the Discord server.
     *
     * @var string $guildId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('guild_id')]
    public string $guildId;

    /**
     * @param  string  $guildId
     * @phpstan-pure
     */
    public function __construct(string $guildId)
    {
        $this->guildId = $guildId;
    }
}