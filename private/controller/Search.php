<?php

class Search extends Controller
{

    function index()
    {

        $errors = [];

        $user = new User();

        $search = $_GET['search'];

        $data = $user->query("SELECT * FROM users JOIN
 categorys ON users.job_category_id = categorys.categorys_id WHERE category_name LIKE '%$search%' || firstname LIKE '%$search%' ");

        $this->view("search", ['errors' => $errors, 'search' => $search, 'data' => $data]);

    }

}





?>