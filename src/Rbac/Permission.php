<?php
declare(strict_types=1);

namespace UcarSolutions\Entities\Rbac;

use DateTimeInterface;

final readonly class Permission implements PermissionInterface
{

    public function __construct(
        private string            $id,
        private string            $name,
        private DateTimeInterface $createTs,
    )
    {
    }

    public function compareTo($object): int
    {
        return 0;
    }

    public function getId(): string
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

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->getId(),
            "name" => $this->getName(),
            "createTs" => $this->getCreateTs(),
        ];
    }
}