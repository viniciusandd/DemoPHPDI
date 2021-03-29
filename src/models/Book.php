<?php

namespace App;

class Book 
{
    private $database;

    public function __construct(DatabaseInterface $database)
    {
        $this->database = $database;
    }

    public function findAll()
    {
        return $this->database->fetchAll('select * from books');
    }
}