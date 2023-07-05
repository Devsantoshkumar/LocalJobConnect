<?php 


class Empdetail extends Controller{

    function index(){


        $this->view("employee_detail");
    }


    function employee_hire(){


        $this->view("employee_hire");
    }

}