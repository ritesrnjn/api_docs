<?php
class Seed extends Controller
{
    public function index()
    {
        $seeder = $this->seeder();

        if($seeder){
            require APP . 'templates/partials/header.php';
            require APP . 'templates/seed.php';
            require APP . 'templates/partials/footer.php';
        }

    }

    public function seeder()
    {
        //adding new route
        $route = new Route;
        $route->name = '/login';
        $route->save();

        //adding a method to route
        $method = $route->methods()->create([
            'tags' => 'customer',
            'method' => 'POST',
            'description' => 'Post operation on customer route'
        ]);


        //adding parameters to method
        $method->parameters()->create([
            'name' => 'mobile',
            'in' => 'formData', //formData/path
            'description' => 'mobile number of customer',
            'required' => true,
            'type' => 'string' //string/file
        ]);
        
        $method->parameters()->create([
            'name' => 'password',
            'in' => 'formData', //formData/path
            'description' => 'password of customer',
            'required' => true,
            'type' => 'string' //string/file
        ]);

        return true;
    }



}//seeder class