<?php

class Signin extends Controller
{
    function index()
    {

        $errors = [];

        if (count($_POST) > 0) {

            $user = new User();

            if ($row = $user->where('email', $_POST['email'])) {
                $row = $row[0];

                if (password_verify($_POST['password'], $row->password)) {

                    Auth::authenticate($row);

                    $this->redirect("Empdetail/" . $row->users_id);

                } else {
                    $errors['password'] = 'Password is invalid';
                }

            } else {
                $errors['email'] = 'Email is invalid';
            }

        }

        $this->view("signin", ['errors' => $errors]);
    }
}


?>