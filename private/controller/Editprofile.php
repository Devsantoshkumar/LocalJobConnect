<!-- Edit Profile Controller -->


<?php

class Editprofile extends Controller
{

    function __construct()
    {
        if (!Auth::loggedIn()) {
            $this->redirect("signin");
        }
    }
    function index($id = null)
    {

        $errors = [];


        $user = new User();

        if (count($_POST) > 0) {


            $user->update($id, $_POST);

        }

        $data = $user->where("users_id", $id);


        // show($data);

        $this->view("editprofile", ['errors' => $errors, 'rows' => $data]);
    }
}

?>