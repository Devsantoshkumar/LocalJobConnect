<!-- Search Controller -->

<?php

class Search extends Controller
{
    function index(){
        $errors = [];

        $this->view('search',['error'=>$errors]);
    }
}





?>