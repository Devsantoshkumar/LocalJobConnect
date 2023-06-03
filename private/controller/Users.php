<?php

class Users extends Controller{

    function index(){

        $errors = [];

        $user = new User();

        $data = $user->where('rank','normal');
        $team = $user->query('SELECT * FROM users WHERE rank != "normal"');
        
        $this->view("users",['errors'=>$errors, 'rows'=>$data, 'team'=>$team]);
    }


    function add(){
        $errors = [];

        $user = new User();

        if(count($_POST)>0){

            if($user->validate($_POST)){

                $_POST['date'] = date("y-m-d H:i:s");
                $user->insert($_POST);
                $this->redirect("users");

            }else{
                $errors = $user->errors;
            }

        }else{
            $errors = $user->errors;
        }


        $this->view("users.add",['errors'=>$errors]);
    }


    function edit($id=NULL){

        $errors = [];

        $this->view("users.edit", ['errors'=>$errors]);
    }


    function delete($id=NULL){


        $errors = [];
    }

    

    function password($id=NULL){

        $errors = [];

        $this->view("users.password", ['errors'=>$errors]);
    }

    function role($id=NULL){

        $errors = [];

        $this->view("users.role", ['errors'=>$errors]);
    }

    function email($id=NULL){

        $errors = [];

        $this->view("users.email", ['errors'=>$errors]);
    }



}