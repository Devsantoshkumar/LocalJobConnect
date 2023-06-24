<?php

class Auth
{
    public static function authenticate($row)
    {
        $_SESSION['USERS'] = $row;
    }


    // Logout() -> It will unset all the value that is store by the session variable
    public static function logout()
    {
        if (isset($_SESSION['USERS'])) {
            unset($_SESSION['USERS']);
        }
    }

    // loggedIn() -> It wil if any user is logged or not.
    public static function loggedIn()
    {
        if (isset($_SESSION['USERS'])) {
            return true;
        }
        return false;
    }

    // user() -> It help to display the thing you want to display when you loggedIn.
    public static function user($user)
    {
        if (isset($_SESSION['USERS'])) {
            return $_SESSION['USERS']->$user;
        }
        return false;
    }
}













?>