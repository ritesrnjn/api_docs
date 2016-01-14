<?php
class MakeJson extends Controller
{
    public function index()
    {
        $this->createJson();
        require APP . 'view/templates/header.php';
        require APP . 'view/makeJson.php';
        require APP . 'view/templates/footer.php';
    }


    public function createJson()
    {

        $routes = Route::all();
        $paths_array = array();

        foreach ($routes as $route) {
            $route_name = $route->name;
            $route_array = array();

            $methods = $route->methods;


            foreach ($methods as $method) {
                $method_name = $method->method;

                echo $method_name . " " . $route_name . '<br>';
                $method_description = $method->description;
                $method_tags = $method->tags;
                $parameters = $method->parameters;

                $method_array = array(
                    'description' => $method_description,
                    'tags' => [$method_tags],
                    'parameters' => $parameters,
                    'responses' => array(
                        '200' => array(
                            'description' => 'OK'
                        )
                    )
                );
                $route_array[$method_name] = $method_array;
                $method_array = NULL;
            }//foreach method

            $paths_array[$route_name] = $route_array;
            $route_array = NULL;
        }//foreach route


        $final_array = array(
            'swagger' => '2.0',
            'info' => array(
                'version' => '0.0.1',
                'title' => 'MY REST API'
            ),
            'host' => 'example.com',
            'basePath' => '/appx_api',
            'schemes' => [
                'http',
                'https'
            ],
            'consumes' => ['application/json'],
            'produces' => ['application/json'],
            'paths' => $paths_array

        );

        $fp = fopen('storage/appx.json', 'w');
        fwrite($fp, json_encode($final_array));
        fclose($fp);
    }
}