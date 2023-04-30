<?php

class Signin extends Controller
{
    function index()
    {

        $errors = [];


        $this->view("signin", ['errors' => $errors]);
    }
}


?>