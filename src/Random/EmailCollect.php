<?php
declare(strict_types=1);
/**
 * Entities
 *
 * Copyright (C) <2025> <Dogan Ucar>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published
 * by the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

namespace UcarSolutions\Entities\Random;

use DateTimeInterface;

final readonly class EmailCollect
{

    public function __construct(
        private string            $id,
        private string            $email,
        private array             $payload,
        private DateTimeInterface $createTs
    )
    {
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPayload(): array
    {
        return $this->payload;
    }

    public function getCreateTs(): DateTimeInterface
    {
        return $this->createTs;
    }

}
