<?php
declare(strict_types=1);

namespace UcarSolutions\Entities\Organization;

use DateTimeImmutable;

readonly class NullOrganization extends Organization
{
    public function __construct()
    {
        parent::__construct("", "", new DateTimeImmutable());
    }
}