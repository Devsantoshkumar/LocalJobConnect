<!-- Start Selling Controller -->


<?php

class StartSelling extends Controller
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

        $data = $user->where('users_id', $id);

        // $rows = [];
        // $search = '';

        // $user = new User();

        // if (isset($_GET['search'])) {
        //     $search = $_GET['search'];
        //     $rows = $user->query("SELECT * FROM users LEFT JOIN skills ON users.users_id = skills.skill_user_id WHERE skill_name LIKE '%$search%'");
        //     // show($rows);
        // }
        // show($data);

        $this->view("startselling", ['errors' => $errors, 'rows' => $data]);
    }
}

?>