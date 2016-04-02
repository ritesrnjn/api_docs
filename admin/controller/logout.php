<?php

class logout extends Controller
{
    public function index()
    {
        session_destroy();
        header('location: ../');
    }
}
