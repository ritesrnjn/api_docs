<?php

class Show extends Controller
{
    public function index()
    {
        $allMethods = $this->routeList();

        require APP . 'view/templates/header.php';
        require APP . 'view/show.php';
        require APP . 'view/templates/footer.php';

    }

    public function routeList()
    {
        $routes = Route::all();

        //array of all routes
        $routes_array = json_decode($routes,TRUE);

        //var_dump($routes_array); //correct

        $allMethods = array();
        foreach ($routes_array as $route){
            //each route access
            //get route object
            $api = Route::find($route['id']);
            //echo $api."<br>"; //correct

            //get all methods of this route and push to allMethods array


            $routeMethods = $api->methods;
            //echo $routeMethods."<br>";
            foreach($routeMethods as $routeMethod){

                // echo $routeMethod."<br>";

                $method = $routeMethod->method;
                $description = $routeMethod->description;

                $routeMethod_array= array();
                $routeMethod_array['route']= $route['name'];
                $routeMethod_array['method']= $routeMethod->method;
                $routeMethod_array['tags'] = $routeMethod->tags;
                $routeMethod_array['method_id']= $routeMethod->id;
                $routeMethod_array['description']= $routeMethod->description;

                array_push($allMethods, $routeMethod_array);
                $routeMethod_array = NULL;
            }
        } //foreach

        return $allMethods;
    }//list

}

