<?php
    // create Eloquent database connection
    $capsule = new \Illuminate\Database\Capsule\Manager;

    $capsule->addConnection($container['settings']['db']);
    $capsule->setAsGlobal();
    $capsule->bootEloquent();