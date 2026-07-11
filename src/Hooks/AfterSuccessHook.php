<?php


declare(strict_types=1);

namespace Ruba\Hooks;

use Psr\Http\Message\ResponseInterface;

interface AfterSuccessHook
{
    public function afterSuccess(AfterSuccessContext $context, ResponseInterface $response): ResponseInterface;
}
