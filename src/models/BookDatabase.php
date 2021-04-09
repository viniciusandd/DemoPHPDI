<?php

namespace App;

class BookDatabase
{
    private $database;

    public function __construct(DatabaseInterface $database)
    {
        $this->database = $database;
    }

    public function findAll() : array
    {
        return $this->database->fetchAll('select * from books');
    }
}