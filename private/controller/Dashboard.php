<?php

class Dashboard extends Controller{
    function index(){

        $errors = [];

        
        $this->view("dashboard",['errors'=>$errors]);
    }
}