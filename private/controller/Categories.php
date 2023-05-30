<?php

class Categories extends Controller
{
    function index()
    {

        $errors = [];


        $this->view("categories", ['errors' => $errors]);
    }



    function add(){
        $errors = [];

        $this->view("categories.add",['errors'=>$errors]);
    }
}

?>