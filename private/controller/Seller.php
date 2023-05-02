<?php

class Seller extends Controller
{
    function index()
    {

        $errors = [];


        $this->view("seller", ['errors' => $errors]);
    }
}

?>