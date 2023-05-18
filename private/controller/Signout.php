<?php

class Signout extends Controller
{
    function index()
    {
        Auth::logout();
        $this->redirect("home");
    }
}

?>