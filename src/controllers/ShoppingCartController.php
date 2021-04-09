<?php

namespace App;

class ShoppingCartController
{
    private $session;

    public function __construct(Session $session)
    {
        $this->session = $session;
    }
    
    public function add()
    {
        $testProducts = array(
            array(
                "id" => "1",
                "quantity" => "5"
            ),
            array(
                "id" => "1",
                "quantity" => "3"
            ),
            array(
                "id" => "2",
                "quantity" => "1"
            )
        );        
        $this->session->set("shopping_cart", $testProducts);       
    }

    public function show()
    {
        r($this->session->get("shopping_cart"));
    }

    public function index()
    {
        echo 'Hello, world';
    }
}