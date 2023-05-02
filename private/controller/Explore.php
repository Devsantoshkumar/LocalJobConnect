<?php

class Explore extends Controller
{
    function index()
    {

        $errors = [];


        $this->view("explore", ['errors' => $errors]);
    }
}

?>