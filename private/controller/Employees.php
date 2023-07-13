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

    // function searching()
    // {
    //     $errors = [];
    //     $rows = [];
    //     $search = '';

    //     $user = new User();

    //     if (isset($_GET['search'])) {
    //         $search = $_GET['search'];
    //         $rows = $user->query("SELECT * FROM users LEFT JOIN categorys ON users.job_category_id = categorys.categorys_id WHERE category_name LIKE '%$search%'");
    //         show($rows);
    //     }

    //     $this->view('employees', ['errors' => $errors, 'rows' => $rows, 'search' => $search]);
    // }
}