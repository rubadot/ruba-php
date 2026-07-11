<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum FilterConjunction: string
{
    case And = 'and';
    case Or = 'or';
}
