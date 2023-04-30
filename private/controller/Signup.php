<?php

class Signup extends Controller
{
    function index()
    {

        $errors = [];


        $this->view("signup", ['errors' => $errors]);
    }
}


?>