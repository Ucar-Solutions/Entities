<?php
declare(strict_types=1);

namespace UcarSolutions\Entities\Http;

enum Route: string
{

    case PATH = 'path';
    case MIDDLEWARE = 'middleware';
    case METHOD = 'method';
    case NAME = 'name';
    case OPTIONS = 'options';

}
