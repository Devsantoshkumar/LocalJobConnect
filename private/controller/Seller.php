<?php

class Seller extends Controller
{
    function index($id=NULL)
    {

        $errors = [];

        $hire = new Hire();

        $hireData = $hire->query("SELECT * FROM hires LEFT JOIN users ON hires.employee_id = users.users_id WHERE employer_id = $id");


        $this->view("seller", ['errors' => $errors, 'hireData'=>$hireData]);
    }
}

?>