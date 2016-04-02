<?php

class not_found extends Controller
{
    public function index()
    {
        require APP . 'templates/partials/header.php';
        require APP . 'templates/not_found.php';
        require APP . 'templates/partials/footer.php';
    }
}
