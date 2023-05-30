<!-- PROFILE CONTROLLER -->


<?php

class Profile extends Controller
{

    function __construct(){
        if (!Auth::loggedIn()) {
            $this->redirect("signin");
        }
    }

    public function index($id=NULL)
    {

        $errors = [];


        $user = new User();

        $data = $user->where('users_id', $id);

        $this->view("profile", ['errors' => $errors,'row'=>$data]);
    }
}





?>