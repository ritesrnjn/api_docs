<?php

if (($_SERVER['REQUEST_METHOD'] == 'POST')):

    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    //Validating fields
    $formerrors = false;
    if($name =='')    { $formerrors=true; $errmsg = 'name is a required field'; }
    if($password =='')   { $formerrors=true; $errmsg = 'password is a required field'; }

    if($name != ADMIN_NAME){
        $formerrors=true; $errmsg = 'username/password incorrect';
    }
    if($password != ADMIN_PASS){
        $formerrors=true; $errmsg = 'username/password incorrect';
    }

    if($formerrors){
        return $errmsg;
    } else {
        $_SESSION["admin_id"] = 1;
        header('location: admin/');
    }

endif; //form submitted

