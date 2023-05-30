<!-- Edit Profile Controller -->


<?php

class Editprofile extends Controller
{
    function index()
    {

        $errors = [];

        if (!Auth::loggedIn()) {
            $this->redirect("signin");
        }

        $this->view("editprofile", ['errors' => $errors]);
    }
}

?>