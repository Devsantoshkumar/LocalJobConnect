<?php

class Tests extends Controller
{
    function index()
    {

        $errors = [];

        if($_SERVER['REQUEST_METHOD'] == "POST"){

            $test = new Test();

            if($test->validate($_POST)){
                $test->insert($_POST);
                echo "Data inseted successfully";
            }else{
                echo "Something error accured";
            }

            die();
        }


        $this->view("test", ['errors' => $errors]);
    }
}

?>