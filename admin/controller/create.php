<?php
class Create extends Controller
{
    public function index()
    {
        require APP . 'templates/partials/header.php';
        require APP . 'templates/create.php';
        require APP . 'templates/partials/footer.php';
    }


    //saves new api
    public function addapi(){

        if(isset($_POST)==true && empty($_POST)==false) {

            $api = $_POST['api'];
            $methodName = $_POST['method'];
            $tags = $_POST['tags']? $_POST['tags']:'default';
            $description = $_POST['description']? $_POST['description']:' ';


            $BX_NAME = $_POST['BX_NAME'];
            $BX_TYPE = $_POST['BX_TYPE'];
            $BX_CHK = $_POST['BX_CHK'];
            $BX_DESCRIPTION = $_POST['BX_DESCRIPTION'];
            $BX_IN = $_POST['BX_IN'];

            $param_count = count($BX_NAME);

            //check if route already exists
            $route = Route::where('name','=', $api)->first();
            if(!$route){
                //adding new route
                $route = new Route;
                $route->name = $api;
                $route->save();
            }

            $method = $route->methods()->where('method','=',$methodName)->firstOrCreate([
                'tags' => $tags,
                'method' => $methodName,
                'description' => $description,
            ]);


            //parameters
            //if blank field submitted in parameter don't add it

            for ($i = 0; $i < $param_count; $i++) {
                if($BX_NAME[$i] !=''){
                    $BX_CHK[$i] = 'on' ? true : false;
                    $BX_DESCRIPTION[$i] = $BX_DESCRIPTION[$i] ? $BX_DESCRIPTION[$i] : ' ';

                    $method->parameters()->create([
                        'name' => $BX_NAME[$i],
                        'in' => $BX_IN[$i],
                        'description' => $BX_DESCRIPTION[$i],
                        'required' => $BX_CHK[$i],
                        'type' => $BX_TYPE[$i],
                    ]);
                }//END if
            }//for

            header('location: ' . URL . '/show');
        } else{
            header('location: ' . URL . '/show');
        }//if-else post
    } //add api

}//class




