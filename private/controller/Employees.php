<?php

class Employees extends Controller
{

    function index($id = NULL)
    {

        $errors = [];

        $user = new User();

        $rows = '';
        $search = '';

        if (isset($_GET['search'])) {
            $search = $_GET['search'];
            $rows = $user->query("SELECT * FROM users JOIN categorys ON users.job_category_id = categorys.categorys_id WHERE category_name LIKE '%$search%' || firstname LIKE '%$search%'");
        }

        $userdata = $user->where("job_category_id", $id);

        $this->view("employees", ['errors' => $errors, 'userData' => $userdata, 'row' => $rows, 'search' => $search, 'category_id'=>$id]);
    }


}