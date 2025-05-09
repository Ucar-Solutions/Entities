<?php
declare(strict_types=1);

namespace UcarSolutions\Entities\Organization;

use DateTimeInterface;
use UcarSolutions\Entities\Common\JsonEntityInterface;

interface OrganizationInterface extends JsonEntityInterface
{
    public function getId(): string;

    public function getName(): string;

    public function getCreateTs(): DateTimeInterface;
}