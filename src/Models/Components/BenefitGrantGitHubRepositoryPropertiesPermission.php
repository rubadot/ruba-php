<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum BenefitGrantGitHubRepositoryPropertiesPermission: string
{
    case Pull = 'pull';
    case Triage = 'triage';
    case Push = 'push';
    case Maintain = 'maintain';
    case Admin = 'admin';
}
