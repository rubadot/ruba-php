<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


enum CustomFieldType: string
{
    case Text = 'text';
    case Number = 'number';
    case Date = 'date';
    case Checkbox = 'checkbox';
    case Select = 'select';
}
