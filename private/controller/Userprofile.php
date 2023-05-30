<!-- User Profile Controller -->

<?php

class Userprofile extends Controller
{
    function __construct(){
        if (!Auth::loggedIn()) {
            $this->redirect("signin");
        }
    }


    function index($id=NULL)
    {
        $errors = [];

        $user = new User();

        $data = $user->where("users_id",$id);
        
        $this->view("userprofile", ['errors' => $errors,'rows'=>$data]);
    }
}


?>