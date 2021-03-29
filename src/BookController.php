<?php

namespace App;

class BookController 
{
    private $book;

    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    public function index()
    {        
        r($this->book->findAll());
    }
}