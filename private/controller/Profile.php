<!-- PROFILE CONTROLLER -->


<?php

class Profile extends Controller
{

    public function index()
    {

        $errors = [];

        if (!Auth::loggedIn()) {
            $this->redirect("signin");
        }

        $this->view("profile", ['errors' => $errors]);
    }
}





?>