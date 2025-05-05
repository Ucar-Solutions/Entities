<?php
declare(strict_types=1);

namespace UcarSolutions\Entities\User;
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

use DateTimeInterface;
use doganoo\PHPAlgorithms\Datastructure\Table\HashTable;
use UcarSolutions\Entities\Common\JsonEntityInterface;

interface UserInterface extends JsonEntityInterface
{
    public function getId(): string;

    public function getRoles(): HashTable;

    public function getName(): string;

    public function getEmail(): string;

    public function getCreateTs(): DateTimeInterface;

    public function getPassword(): string;

    public function getToken(): string;

    public function getStatus(): Status;

}