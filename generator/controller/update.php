<?php
class Update extends Controller
{
    //delete an api
    public function deleteapi($method_id)
    {
        if(isset($method_id)):
        settype($method_id, 'integer');
        $method = Method::find($method_id);
        $method->parameters()->delete();
        $method->delete();

        //if any route without any method then delete
        $routes = Route::all();
        foreach ($routes as $route) {
            $methods = $route->methods->toArray();
            if (empty($methods)) {
                $route->delete();
            }
        }

        header('location: ' . URL . '/show');

        else: header('location: ' . URL . '/show');
        endif;
    }



    //fetch api details by id
    public function editapi($method_id)
    {
        if(isset($method_id)):
        settype($method_id, 'integer');
        $method = Method::find($method_id);
        $method_name = $method->method;
        $method_tags = $method->tags;
        $method_description = $method->description;
        $route = $method->route;
        $route_name = $route->name;
        $parameters = $method->parameters;
        $parameters_array = $parameters->toArray();
        $parameter_count = count($parameters_array);

        require APP . 'view/templates/header.php';
        require APP . 'view/update.php';
        require APP . 'view/templates/footer.php';

        else: header('location: ' . URL . '/show');
        endif;
    }


    //save updated values
    public function updateapi()
    {
        //Updates existing api
        if (isset($_POST['update'])) {

            //getting values
            /*$api = $_POST['api'];
            $method = $_POST['method'];*/
            $method_id = $_POST['method_id'];
            $tags = $_POST['tags'] ? $_POST['tags'] : 'default';
            $description = $_POST['description'] ? $_POST['description'] : ' ';

            //arrays
            $BX_NAME = $_POST['BX_NAME'];
            $BX_TYPE = $_POST['BX_TYPE'];
            $BX_CHK = $_POST['BX_CHK'];
            $BX_DESCRIPTION = $_POST['BX_DESCRIPTION'];
            $BX_IN = $_POST['BX_IN'];

            $param_count = count($BX_NAME);

            //delete all existing parameters
            $method = Method::find($method_id);
            $parameters = $method->parameters()->delete();
            $method->tags = $tags;
            $method->description = $description;
            $method->save();

            //parameters
            for ($i = 0; $i < $param_count; $i++) {

                if ($BX_NAME[$i] != '') {
                    $BX_CHK[$i] = 'on' ? true : false;
                    $BX_DESCRIPTION[$i] = $BX_DESCRIPTION[$i] ? $BX_DESCRIPTION[$i] : ' ';

                    $parameter = $method->parameters()->create([
                        'name' => $BX_NAME[$i],
                        'in' => $BX_IN[$i],
                        'description' => $BX_DESCRIPTION[$i],
                        'required' => $BX_CHK[$i],
                        'type' => $BX_TYPE[$i],
                    ]);
                }//if
            }//for

            header('location: ' . URL . '/show');
        }//updateApi

    }
}//class update