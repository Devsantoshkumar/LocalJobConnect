<!-- Start Selling Controller -->


<?php

class StartSelling extends Controller
{
    function __construct()
    {
        if (!Auth::loggedIn()) {
            $this->redirect("signin");
        }
    }

    function index()
    {

        $errors = [];


        $this->view("startselling", ['errors' => $errors]);
    }
}

?>