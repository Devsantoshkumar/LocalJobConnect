<?php

class Employees extends Controller{
    function index(){

        $errors = [];

        
        $this->view("employees",['errors'=>$errors]);
    }
}