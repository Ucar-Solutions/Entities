<?php
declare(strict_types=1);
/**
 * @package             UcarSolutions\Rhesus
 * @author              Dogan Ucar (info@ucar-solutions.de)
 * @copyright       (C) 2023 - today proprietary. All rights reserved.
 * @license             proprietary
 * @link                https://ucar-solutions.de
 */

namespace UcarSolutions\Entities\Http;

enum Verb: string
{

    case GET = 'GET';
    case POST = 'POST';
    case PUT = 'PUT';
    case DELETE = 'DELETE';
    case PATCH = 'PATCH';

}
