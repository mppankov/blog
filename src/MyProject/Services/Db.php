<?php

namespace MyProject\Services;

use PDO;

class Db
{
    private static Db $instance;
    private PDO $pdo;

    private function __construct()
    {
        $dbOptions = (require __DIR__ . '/../../settings.php')['db'];

        $this->pdo = new PDO(
            'mysql:host=' . $dbOptions['host'] .
            ';dbname=' . $dbOptions['dbname'],
            $dbOptions['user'],
            $dbOptions['password']);

        $this->pdo->exec('SET NAMES UTF8');
    }

    public function query(string $sql, array $params = [], string $className = 'stdClass'): ? array
    {
        $sth = $this->pdo->prepare($sql);
        $result = $sth->execute($params);

        if (false === $result) {
            return null;
        }
//PDO::FETCH_CLASS - возвращает результат в виде объекта какого-то класса
        return $sth->fetchAll(PDO::FETCH_CLASS, $className);
    }
//паттерн Singleton - гарантирует, что в рамка приложения будет использован только один объект какого-то класса..
    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

