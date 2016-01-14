<?php

class Error extends Controller
{
    public function index()
    {
        require APP . 'view/templates/header.php';
        require APP . 'view/error.php';
        require APP . 'view/templates/footer.php';
    }
}
