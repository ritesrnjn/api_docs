<?php
class Home extends Controller
{
    public function index()
    {
        require APP . 'view/templates/header.php';
        require APP . 'view/index.php';
        require APP . 'view/templates/footer.php';
    }
}