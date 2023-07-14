<?php

class Home extends Controller
{


    function __construct(){

        if(Auth::loggedIn()){
            
            if(Auth::user("type") == 'employee'){
                $this->redirect("empdetail/".Auth::user("users_id"));
            }else{
                $this->redirect("seller/".Auth::user("users_id"));
            }
        }
    }

    function index()
    {

        $errors = [];

        $category = new Category();

        $catData = $category->query("SELECT * FROM categorys WHERE category_status = 1 LIMIT 10");

        $this->view("home", ['errors' => $errors, 'category_data'=>$catData]);
    }
}

?>