<?php
declare(strict_types=1);

namespace UcarSolutions\Entities\Organization;

use DateTimeInterface;

interface OrganizationInterface
{
    public function getId(): string;

    public function getName(): string;

    public function getCreateTs(): DateTimeInterface;
}