<?php
declare(strict_types=1);

namespace UcarSolutions\Entities\User\Rbac;

use DateTimeInterface;

final readonly class Permission implements PermissionInterface
{

    public function __construct(
        private int               $id,
        private string            $name,
        private DateTimeInterface $createTs,
    )
    {
    }

    public function compareTo($object): int
    {
        if (!($object instanceof PermissionInterface)) {
            return false;
        }
        return true;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCreateTs(): DateTimeInterface
    {
        return $this->createTs;
    }

}