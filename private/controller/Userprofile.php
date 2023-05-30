<!-- User Profile Controller -->

<?php

class Userprofile extends Controller
{
    function index()
    {
        $errors = [];

        if (!Auth::loggedIn()) {
            $this->redirect("signin");
        }

        $this->view("userprofile", ['errors' => $errors]);
    }
}


?>