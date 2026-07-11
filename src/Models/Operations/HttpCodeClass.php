<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;


/** Filter by HTTP response code class (2xx, 3xx, 4xx, 5xx). */
enum HttpCodeClass: string
{
    case Twoxx = '2xx';
    case Threexx = '3xx';
    case Fourxx = '4xx';
    case Fivexx = '5xx';
}
