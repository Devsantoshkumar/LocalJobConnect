<!-- Search Controller -->

<?php

class Search extends Controller
{

    function __construct()
    {
        if (Auth::loggedIn()) {
            $this->view("includes/startsellingNav");
        }
    }
    function index()
    {
        $errors = [];
        $rows = [];
        $search = '';

        $user = new User();

        if (isset($_GET['search'])) {
            $search = $_GET['search'];
            $rows = $user->query("SELECT * FROM users LEFT JOIN skills ON users.users_id = skills.skill_user_id WHERE skill_name LIKE '%$search%'");
            // show($rows);
        }

        $this->view('search', ['errors' => $errors, 'rows' => $rows, 'search' => $search]);
    }
}





?>