<?php

class Signup extends Controller
{
    function index()
    {

        $errors = [];

        if (count($_POST) > 0) {

            $user = new User();

            if ($user->validate($_POST)) {

                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                $_POST['date'] = date("Y-m-d");

                $user->insert($_POST);

                $this->redirect("signin");

            } else {
                $errors = $user->errors;
            }
        }

        $this->view("signup", ['errors' => $errors]);
    }
}


?>