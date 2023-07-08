<?php

class Countrys extends Controller
{

    function index()
    {

        $errors = [];

        $country = new Country();

        $countryData = $country->findAll("DESC");

        $this->view("countries", ['errors' => $errors, 'country_data'=>$countryData]);
    }


    function add(){
        $errors = [];

        $country = new Country();

        if(count($_POST)>0){

            if($country->validate($_POST)){

                $country->insert($_POST);
                $_SESSION['msg'] = "Country created successfully";
                $_SESSION['status'] = "success";
                $this->redirect("countrys/add");

            }else{
                $errors = $country->errors;
            }
        }

        $this->view("countries.add",['errors'=>$errors]);
    }



    public function delete($id=NULL){

        $country = new Country();

        if(isset($id)){
            $country->delete($id);
            $_SESSION['msg'] = "Country deleted successfully";
            $_SESSION['status'] = "success";
            $this->redirect("countrys");
        }
    }
}

?>