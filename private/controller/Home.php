<?php

class Home extends Controller
{
    function index()
    {

        $errors = [];

        $category = new Category();

        $catData = $category->query("SELECT * FROM categorys WHERE category_status = 1 LIMIT 10");

        $this->view("home", ['errors' => $errors, 'category_data'=>$catData]);
    }
}

?>