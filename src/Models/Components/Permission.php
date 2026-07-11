<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/** The permission level to grant. Read more about roles and their permissions on [GitHub documentation](https://docs.github.com/en/organizations/managing-user-access-to-your-organizations-repositories/managing-repository-roles/repository-roles-for-an-organization#permissions-for-each-role). */
enum Permission: string
{
    case Pull = 'pull';
    case Triage = 'triage';
    case Push = 'push';
    case Maintain = 'maintain';
    case Admin = 'admin';
}
