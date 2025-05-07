<?php
declare(strict_types=1);

namespace UcarSolutions\Entities\User;

use DateTimeImmutable;

final readonly class NullUser extends User
{

    public function __construct()
    {
        parent::__construct(
            id: "",
            name: "",
            email: "",
            password: "",
            token: "",
            status: Status::DISABLED,
            subscription: Subscription::PAID,
            permissions: [],
            createTs: new DateTimeImmutable()
        );
    }

}
