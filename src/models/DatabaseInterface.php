<?php

namespace App;

use PDO;

interface DatabaseInterface 
{
    public function __construct
    (
        string $host,
        string $port,
        string $dbname,
        string $user,
        string $password
    );

    public function fetchAll(string $query) : array;

    public function getPDO() : PDO;
}