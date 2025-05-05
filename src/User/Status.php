<?php
declare(strict_types=1);

namespace UcarSolutions\Entities\User;

enum Status: string
{
    case ENABLED = 'enabled';
    case DISABLED = 'disabled';

}