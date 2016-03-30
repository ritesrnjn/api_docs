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

        if(DB_DRIVER == 'sqlite'){
            $capsule->addConnection([
                'driver'   => 'sqlite',
                'database' => __DIR__.'/../database/api.sqlite3',
                'prefix'   => '',
            ]);
        }
        
        if(DB_DRIVER == 'mysql'){
            $capsule->addConnection([
                'driver'    => 'mysql',
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
        }


        $capsule->setAsGlobal();//make connection available globally
        $capsule->bootEloquent();
    }
}
