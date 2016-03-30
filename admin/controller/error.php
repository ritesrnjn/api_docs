<?php

class Error extends Controller
{
    public function index()
    {
        require APP . 'templates/partials/header.php';
        require APP . 'templates/error.php';
        require APP . 'templates/partials/footer.php';
    }
}
