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

namespace UcarSolutions\Entities\User;

use DateTimeInterface;
use doganoo\PHPAlgorithms\Datastructure\Table\HashTable;

readonly class User implements UserInterface
{

    public function __construct(
        private string            $id,
        private string            $name,
        private string            $email,
        private string            $password,
        private string            $token,
        private Status            $status,
        private HashTable         $roles,
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

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function getStatus(): Status
    {
        return $this->status;
    }

    public function getRoles(): HashTable
    {
        return $this->roles;
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
            'email' => $this->getEmail(),
            'password' => $this->getPassword(),
            'token' => $this->getToken(),
            'status' => $this->getStatus(),
            'roles' => $this->getRoles()->toArray(),
            'createTs' => $this->getCreateTs(),
        ];
    }
}