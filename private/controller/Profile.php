<!-- PROFILE CONTROLLER -->


<?php

class Profile extends Controller
{

    public function index()
    {

        $errors = [];

        $this->view("profile", ['errors' => $errors]);
    }
}





?>