<?php

namespace App;

use PDO;

class PostgresDatabase implements DatabaseInterface
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function fetchAll(string $query) : array
    {
        return $this->pdo->query($query)->fetchAll();
    }
}