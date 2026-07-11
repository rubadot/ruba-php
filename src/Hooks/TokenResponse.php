<?php


declare(strict_types=1);

namespace Ruba\Hooks;

class TokenResponse
{
    public ?string $accessToken;
    public ?string $tokenType;
    public ?int $expiresIn;
}
