<?php

use App\MemorySessionAdapter;
use App\Session;
use App\ShoppingCartController;
use PHPUnit\Framework\TestCase;

require './vendor/autoload.php';

class ShoppingCartControllerTest extends TestCase
{   
    /**
     * @dataProvider calculeTotalPriceProvider
     */
    public function testCalculeTotalPrice(array $products, float $expectedTotalPrice)
    {
        $session = new Session(new MemorySessionAdapter());
        $session->set("shopping_cart", $products);
        $shoppingCartController = new ShoppingCartController($session);
        $this->assertEquals($shoppingCartController->calculeTotalPrice(), $expectedTotalPrice);
    }

    public function calculeTotalPriceProvider() : array
    {
        $case1 = array(
            array("id" => "1", "quantity" => 2, "sale_price" => 5),
            array("id" => "2", "quantity" => 3, "sale_price" => 3),
            array("id" => "3", "quantity" => 10,"sale_price" => 2)
        );        
        $case2 = array(
            array("id" => "1", "quantity" => 5, "sale_price" => 5),
            array("id" => "2", "quantity" => 2, "sale_price" => 3),
            array("id" => "3", "quantity" => 10,"sale_price" => 2)
        );        
        $case3 = array(
            array("id" => "1", "quantity" => 10, "sale_price" => 5),
            array("id" => "2", "quantity" => 5, "sale_price" => 3),
        );        
        return array(
            array($case1, 39),
            array($case2, 51),
            array($case3, 65)
        );
    }
}