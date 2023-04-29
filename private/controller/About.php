<?php

class About extends Controller
{
    function index()
    {

        $errors = [];


        $this->view("about", ['errors' => $errors]);
    }
}

?>