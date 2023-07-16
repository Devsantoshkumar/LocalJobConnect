<?php

class Seller extends Controller
{
    function index($id=NULL)
    {

        $errors = [];

        $hire = new Hire();

        $hireData = $hire->query("SELECT * FROM hires LEFT JOIN users ON hires.employee_id = users.users_id WHERE employer_id = $id");

        $category = new Category();

        $catData = $category->query("SELECT * FROM categorys WHERE category_status = 1 LIMIT 10");

        $this->view("seller", ['errors' => $errors, 'hireData'=>$hireData, 'category_data'=>$catData]);
    }
}

?>