<?php

class States extends Controller
{

    function index()
    {

        $errors = [];

        $states = new State();

        $stateData = $states->findAll("DESC");

        $this->view("states", ['errors' => $errors, 'stateData'=>$stateData]);
    }


    function add(){
        $errors = [];

        $states = new State();
        $country = new Country();

        if(count($_POST)>0){

            if($states->validate($_POST)){

                $states->insert($_POST);
                $_SESSION['msg'] = "State created successfully";
                $_SESSION['status'] = "success";
                $this->redirect("states/add");

            }else{
                $errors = $states->errors;
            }

            
        }

        $countryData = $country->findAll();

        $this->view("states.add",['errors'=>$errors,'countryData'=>$countryData]);
    }



    public function delete($id=NULL){

        $states = new State();

        if(isset($id)){
            $states->delete($id);
            $_SESSION['msg'] = "State deleted successfully";
            $_SESSION['status'] = "success";
            $this->redirect("states");
        }
    }
}

?>