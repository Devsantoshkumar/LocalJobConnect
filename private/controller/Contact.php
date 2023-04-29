<?php

class Contact extends Controller
{
    function index()
    {

        $errors = [];


        $this->view("contact", ['errors' => $errors]);
    }
}

?>