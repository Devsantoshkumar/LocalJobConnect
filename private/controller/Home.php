<?php

class Home extends Controller
{
    function index()
    {

        $errors = [];


        $this->view("home", ['errors' => $errors]);
    }
}

?>