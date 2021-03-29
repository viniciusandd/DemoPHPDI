<?php

require 'vendor/autoload.php';

$containerBuilder = new \DI\ContainerBuilder();
$containerBuilder->useAutowiring(true);
$containerBuilder->addDefinitions('config.php');

$container = $containerBuilder->build();
$container->get(\App\BookController::class)->index();