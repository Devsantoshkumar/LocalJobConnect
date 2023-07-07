<?php

class Categories extends Controller
{
    function index()
    {

        $errors = [];

        $category = new Category();


        $catData = $category->findAll("DESC");

        $this->view("categories", ['errors' => $errors, 'categories_data'=>$catData]);
    }



    function add(){
        $errors = [];

        $category = new Category();

        if(count($_POST)>0){

            if($category->validate($_POST)){

                $_POST['created_by'] = Auth::user("users_id");

                $category->insert($_POST);
                $_SESSION['msg'] = "Category created successfully";
                $_SESSION['status'] = "success";
                $this->redirect("categories/add");

            }else{
                $errors = $category->errors;
            }

            
        }

        $this->view("categories.add",['errors'=>$errors]);
    }



    public function delete($id=NULL){

        $category = new Category();

        if(isset($id)){
            $category->delete($id);
            $_SESSION['msg'] = "Category deleted successfully";
            $_SESSION['status'] = "success";
            $this->redirect("categories");
        }
    }
}

?>