<?php

class Employees extends Controller
{

    function index($id = NULL)
    {

        $errors = [];

        $user = new User();

        $userdata = $user->where("job_category_id", $id);

        $this->view("employees", ['errors' => $errors, 'userData' => $userdata]);
    }

    function searching()
    {
        $errors = [];
        $rows = [];
        $search = '';

        $user = new User();

        
    }
}