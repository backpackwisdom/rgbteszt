<?php
    require '../vendor/autoload.php';

    // creating new Slim app
    $app = new Slim\App([
        'settings' => [
            'displayErrorDetails' => true,
            'db' => [
                'driver' => 'mysql',
                'host' => 'localhost',
                'database' => 'db_rgbteszt',
                'username' => 'root',
                'password' => '',
                'charset' => 'utf8',
                'collation' => 'utf8_general_ci'
            ]
        ]
    ]);

    // init container
    $container = $app->getContainer();

    require '../config/database.php';

    $container['db'] = function() use ($capsule) {
        return $capsule;
    };

    $container['DataController'] = function($container) {
        return new App\Controllers\DataController($container);
    };

    require '../config/routes.php';