<?php
class Home extends Controller
{
    public function index()
    {
        require APP . 'templates/partials/header.php';
        require APP . 'templates/index.php';
        require APP . 'templates/partials/footer.php';
    }
}