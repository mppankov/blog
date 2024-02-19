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

    public function setName(string $name): string
    {
        return $this->name = $name;
    }

    public function getAuthor(): User
    {
        return User::getById($this->authorId);
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): string
    {
        return $this->text = $text;
    }

    protected static function getTableName(): string
    {
        return 'articles';
    }
}