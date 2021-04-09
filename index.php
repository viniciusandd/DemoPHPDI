<?php

session_start();

require 'vendor/autoload.php';

$mappedControllers = [
    "books" => "\App\BookController",    
    "shopping_cart" => "\App\ShoppingCartController",    
];

$explodedUrl = explode("/", $_GET['url']);
$url = $explodedUrl[0];
$method = $explodedUrl[1];

$containerBuilder = new \DI\ContainerBuilder();
$containerBuilder->useAutowiring(true);
$containerBuilder->addDefinitions('config.php');

$container = $containerBuilder->build();

try {
    $container->call([$mappedControllers[$url], $method]);
} catch (\Invoker\Exception\NotCallableException $notCallableException) {
    $container->call(['ErrorController', 'notFound']);
} catch (Exception $exception) {
    r($exception);
    $container->call(['ErrorController', 'unexpectedError']);
}