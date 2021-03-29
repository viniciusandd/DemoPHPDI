<?php

namespace App;

use PDO;

class PostgresDatabase implements DatabaseInterface
{
    private $pdo;

    public function __construct
    (
        string $host,
        string $port,
        string $dbname,
        string $user,
        string $password
    )
    {
        $this->pdo = new \PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
    }

    public function fetchAll(string $query) : array
    {
        return $this->pdo->query($query)->fetchAll();
    }

    public function getPDO() : PDO
    {
        return $this->pdo;
    }
}