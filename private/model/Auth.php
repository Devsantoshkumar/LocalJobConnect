<?php

class Auth
{
    public static function authenticate($row)
    {
        $_SESSION['USER'] = $row;
    }


    // Logout() -> It will unset all the value that is store by the session variable
    public static function logout()
    {
        if (isset($_SESSION['USER'])) {
            unset($_SESSION['USER']);
        }
    }

    // loggedIn() -> It wil if any user is logged or not.
    public static function loggedIn()
    {
        if (isset($_SESSION['USER'])) {
            return true;
        }
        return false;
    }

    // user() -> It help to display the thing you want to display when you loggedIn.
    public static function user($user)
    {
        if (isset($_SESSION['USER'])) {
            return $_SESSION['USER']->$user;
        }
        return false;
    }
}













?>