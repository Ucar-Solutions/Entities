<?php
declare(strict_types=1);

namespace UcarSolutions\Entities\Organization;

use DateTimeInterface;

readonly class Organization implements OrganizationInterface
{
    public function __construct(
        private string            $id,
        private string            $name,
        private DateTimeInterface $createTs,
    )
    {
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
            'id' => $this->getId(),
            'name' => $this->getName(),
            'createTs' => $this->getCreateTs(),
        ];
    }
}