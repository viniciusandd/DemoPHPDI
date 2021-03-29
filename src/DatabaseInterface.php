<?php

namespace App;

use PDO;

interface DatabaseInterface 
{
    public function __construct(PDO $pdo);

    public function fetchAll(string $query) : array;
}