<?php

namespace MyProject\Models\Articles;

use MyProject\Models\ActiveRecordEntity;
use MyProject\Models\Users\User;

class Article extends ActiveRecordEntity
{
    // Object Relational Mapping - структура класса совпадает с БД(свойства => столбцы). При работе с объектами меняется БД и наоборот.
    protected string $name;
    protected string $text;
    protected string $authorId;
    protected string $createdAt;

    public function getName(): string
    {
        return $this->name;
    }

    public function getAuthor(): User
    {
        return User::getById($this->authorId);
    }

    public function getText(): string
    {
        return $this->text;
    }

    protected static function getTableName(): string
    {
        return 'articles';
    }
}