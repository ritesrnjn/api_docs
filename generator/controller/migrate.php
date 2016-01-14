<?php

use Illuminate\Database\Capsule\Manager as Capsule;

class Migrate extends Controller
{

    public function index()
    {
        $this->createTables();

        require APP . 'view/templates/header.php';
        require APP . 'view/migrate.php';
        require APP . 'view/templates/footer.php';

    }

    public function createTables(){
        Capsule::schema()->create('routes', function ($table)
        {

            $table->increments('id');
            $table->string('name')->nullable();
        });

        Capsule::schema()->create('methods', function ($table)
        {

            $table->increments('id');
            $table->string('tags');
            $table->enum('method', ['GET', 'POST', 'PUT', 'DELETE']);
            $table->text('description')->nullable();

            $table->integer('route_id')->unsigned()->index();
            $table->foreign('route_id')->references('id')->on('routes')->onDelete('cascade');
        });

        Capsule::schema()->create('parameters', function ($table)
        {

            $table->increments('id');
            $table->string('name');
            $table->enum('in', ['formData', 'path']);
            $table->text('description')->nullable();
            $table->boolean('required');
            $table->enum('type', ['string', 'file']);

            $table->integer('method_id')->unsigned()->index();
            $table->foreign('method_id')->references('id')->on('methods')->onDelete('cascade');
        });

    }//createTables

} //class migrate