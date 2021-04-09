<?php

namespace App;

class BookController 
{
    private $book;

    public function __construct(BookDatabase $book)
    {
        $this->book = $book;
    }

    public function view()
    {        
        $books = $this->book->findAll();
        require 'src/views/books.php';
    }
}