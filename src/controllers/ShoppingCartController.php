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
                "quantity" => 2,
                "sale_price" => 5
            ),
            array(
                "id" => "2",
                "quantity" => 3,
                "sale_price" => 3
            ),
            array(
                "id" => "3",
                "quantity" => 10,
                "sale_price" => 2
            )
        );        
        $this->session->set("shopping_cart", $testProducts);       
    }

    public function calculeTotalPrice() : float
    {
        $totalPrice = 0.0;
        $products = $this->session->get("shopping_cart");
        foreach ($products as $p) {
            $totalPrice += $p["quantity"] * $p["sale_price"];
        }
        return $totalPrice;
    }

    public function show()
    {
        r($this->session->get("shopping_cart"));
        r($this->calculeTotalPrice());
    }

    public function index()
    {
        echo 'Hello, world';
    }
}