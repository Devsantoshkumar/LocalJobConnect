<?php

class Signout extends Controller
{
    function index()
    {
        Auth::logout();
        $_SESSION['msg'] = "Logout successfully";
        $_SESSION['status'] = "success";
        $this->redirect("/");
    }
}

?>