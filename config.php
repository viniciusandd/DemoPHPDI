<?php

return [
    'db.host' => \DI\env('db_host', 'host.docker.internal'),
    'db.port' => \DI\env('db_port', '5432'),
    'db.name' => \DI\env('db_name', 'demophpdi'),
    'db.username' => \DI\env('db_username', 'postgres'),
    'db.password' => \DI\env('db_password', 'docker'),
    \App\PDO::class => \DI\create()->constructor(
        \DI\get('db.host'),
        \DI\get('db.port'),
        \DI\get('db.name'),
        \DI\get('db.username'),
        \DI\get('db.password')
    ),
    PDO::class => \DI\factory([\App\PDO::class, 'getPDO']),
    \App\DatabaseInterface::class => \DI\create(\App\PostgresDatabase::class)->constructor(\DI\get(PDO::class)),
    \App\SessionInterface::class => \DI\create(\App\PhpSessionAdapter::class)
];