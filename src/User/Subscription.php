<?php
declare(strict_types=1);

namespace UcarSolutions\Entities\User;

enum Subscription: string {
    case FREE = 'free';
    case PAID = 'paid';
    case LIFETIME = 'lifetime';
}