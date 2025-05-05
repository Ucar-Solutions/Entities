<?php
declare(strict_types=1);

namespace UcarSolutions\Entities\User;

use DateTimeImmutable;
use doganoo\PHPAlgorithms\Datastructure\Table\HashTable;

final readonly class NullUser extends User
{

    public function __construct()
    {
        parent::__construct(
            "",
            "",
            "",
            "",
            "",
            Status::DISABLED,
            new HashTable(),
            new DateTimeImmutable()
        );
    }

}
