<?php

namespace MyProject\Models\Users;

use MyProject\Models\ActiveRecordEntity;

class User extends ActiveRecordEntity
{
    // Object Relational Mapping - структура класса совпадает с БД(свойства => столбцы). При работе с объектами меняется БД и наоборот.
    protected string $nickname;
    protected string $email;
    protected int $isConfirmed;
    protected string $role;
    protected string $passwordHash;
    protected string $authToken;
    protected string $createdAt;

    public function getNickname(): string
    {
        return $this->nickname;
    }

    protected static function getTableName(): string
    {
        return 'users';
    }

}
