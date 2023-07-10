<?php

class Citys extends Controller
{
    function index()
    {

        $errors = [];

        $city = new City();


        $cityData = $city->findAll("DESC");

        $this->view("cities", ['errors' => $errors, 'city_data'=>$cityData]);
    }



    function add(){
        $errors = [];

        $city = new City();
        $state = new State();

        if(count($_POST)>0){

            if($city->validate($_POST)){
                $city->insert($_POST);
                $_SESSION['msg'] = "City created successfully";
                $_SESSION['status'] = "success";
                $this->redirect("citys/add");
            }else{
                $errors = $city->errors;
            }
        }

        $states = $state->findAll();

        
        $this->view("cities.add",['errors'=>$errors, 'stateData'=>$states]);
    }



    public function delete($id=NULL){

        $city = new City();

        if(isset($id)){
            $city->delete($id);
            $_SESSION['msg'] = "City deleted successfully";
            $_SESSION['status'] = "success";
            $this->redirect("citys");
        }
    }
}

?>