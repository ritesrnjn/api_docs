<?php

use Illuminate\Database\Capsule\Manager as Capsule;

class Controller
{

    function __construct()
    {
        $this->openDatabaseConnection();
    }

    /**
     * Open the database connection with the credentials from application/config/config.php
     */
    private function openDatabaseConnection()
    {
        $capsule = new Capsule;

        $capsule->addConnection([
            'driver'    => DB_DRIVER,
            'host'      => '127.0.0.1',
            'port'      => '3306',
            'database'  => DB_NAME,
            'username'  => DB_USER,
            'password'  => DB_PASS,
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ]);

        $capsule->setAsGlobal();//make connection available globally
        $capsule->bootEloquent();
    }
}
