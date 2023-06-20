
<?php

class Userprofile extends Controller
{
    function __construct()
    {
        if (!Auth::loggedIn()) {
            $this->redirect("signin");
        }
    }


    function index($id = NULL)
    {
        $errors = [];
        $skills = new Skill();

        if(!empty($_POST['skillData'])){
            
            $_POST['date'] = date("Y-m-d");
            $_POST['user_id'] = Auth::user("users_id");
            $skills->insert($_POST);
            echo "Data inserted successfully";
            die();
        }

        $user = new User();

        $data = $user->where("users_id", $id);

        $sData = $skills->where("user_id",Auth::user("users_id"));
        if(!empty($_GET['skills'])){

            $output = "";

            foreach($sData as $srows){
               $output .= '<div class="d-flex align-items-center">
                            <i class="fa-solid fa-plus fw-bold me-2"></i>
                            <span>'.$srows->skill_name.'</span>
                        </div>';
            }
            echo $output;
            die();
        }

        $this->view("userprofile", ['errors' => $errors, 'rows' => $data]);
    }

    function update($id = null)
    {

        $errors = [];


        $user = new User();

        $userimage = $user->where("users_id", $id);

        if (count($_POST) > 0) {

            $allowedTypes = ["image/jpeg", "image/jpg", "image/png"];

            if ($user->fileValidate($_FILES['image'], $allowedTypes)) {

                $_POST['image'] = $user->updateImage($_FILES['image'], $userimage, $id);
                $user->update($id, $_POST);

                $this->redirect("userprofile/" . Auth::user("users_id"));
            }else{
                $errors = $user->errors;
            }

        }

        $data = $user->where("users_id", $id);


        $this->view("editprofile", ['errors' => $errors, 'rows' => $data]);
    }
}


?>