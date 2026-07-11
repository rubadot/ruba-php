<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum WebhookFormat: string
{
    case Raw = 'raw';
    case Discord = 'discord';
    case Slack = 'slack';
}
