<!-- User Profile Controller -->

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

        $user = new User();

        $data = $user->where("users_id", $id);

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