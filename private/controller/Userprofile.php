<!-- User Profile Controller -->

<?php

class Userprofile extends Controller
{
    function index()
    {
        $errors = [];

        $this->view("userprofile", ['errors' => $errors]);
    }
}


?>