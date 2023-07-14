<?php


class Empdetail extends Controller
{


    function __construct()
    {
        if (!Auth::loggedIn()) {
            $this->redirect("Signin");
        }
    }
    function index($id = NULL)
    {

        $users = new User();
        $category = new Category();
        $hire = new Hire();

        $userdata = $users->query("SELECT * FROM users LEFT JOIN countrys ON users.country_id = countrys.countrys_id LEFT JOIN states ON users.state_id = states.states_id LEFT JOIN citys ON users.city_id = citys.citys_id WHERE users_id = $id");

        $jobCategories = $category->findAll();

        $inccoming = $hire->query("SELECT * FROM hires LEFT JOIN users ON hires.employee_id = users.users_id WHERE employee_id = $id");


        $similiarProfiles = $users->query("SELECT * FROM users LEFT JOIN categorys ON users.job_category_id = categorys.categorys_id LEFT JOIN citys ON users.city_id = citys.citys_id WHERE users_id <> $id AND job_category_id IS NOT NULL");


        $this->view("employee_detail", ['userId' => $id, 'userData' => $userdata, 'incooming' => $inccoming, 'jobCategories' => $jobCategories, 'similiarProfiles' => $similiarProfiles]);
    }


    function edit_emp_info($id = NULL)
    {
        $errors = [];

        $user = new User();

        if (count($_POST) > 0) {

            $user->update($id, $_POST);
            $errors['updatedProfile'] = "Profile updated successfully";
            echo json_encode($errors);
            die();
        }

    }


    function employee_hire($id = NULL)
    {

        $errors = [];

        $user = new User();
        $hire = new Hire();



        if (count($_POST) > 0) {

            if ($hire->validate($_POST)) {
                $_POST['hiring_date'] = date("y-m-d H:i:s");
                $_POST['employee_id'] = $id;
                $_SESSION['msg'] = "Request send to employee";
                $_SESSION['status'] = 'success';
                $hire->insert($_POST);
                $this->redirect("empdetail/employee_hire/" . $id);
            } else {

                $errors = $hire->errors;

            }

        }

        $userData = $user->query("SELECT * FROM users LEFT JOIN categorys ON users.job_category_id = categorys.categorys_id LEFT JOIN citys ON users.city_id = citys.citys_id WHERE users_id = $id");

        $employerData = $user->query("SELECT * FROM users WHERE users_id = $id AND type = 'employer'");



        $this->view("employee_hire", ['data' => $userData, 'empDetial' => $employerData, 'employee_id' => $id, 'errors' => $errors]);

    }


    function profile_upload($id = NULL)
    {

        $errors = [];

        $users = new User();
        $userData = $users->where("users_id", $id);
        $userImage = $userData[0]->image;
        $PREV_FILE = $userImage;

        $imageExt = ['image/jpg', 'image/jpeg', 'image/png', 'image/webp'];

        if (count($_FILES) > 0) {
            if ($users->ImageValidate($_FILES['image'], $PREV_FILE, $imageExt)) {
                $_POST['image'] = $users->updateImage($_FILES['image'], $PREV_FILE, $id);
                $users->update($id, $_POST);
                $errors['imagesuccess'] = "Profile changes successfully";
                echo json_encode($errors);

            } else {
                $errors = $users->errors;
                echo json_encode($errors);
            }
        }

    }

    function profile_fetch($id = NULL)
    {

        $users = new User();
        if (!empty($id)) {

            $userData = $users->where("users_id", $id);
            echo json_encode($userData);
        }

    }


    function userbanner_upload($id = NULL)
    {

        $errors = [];

        $users = new User();
        $userData = $users->where("users_id", $id);
        $userImage = $userData[0]->cover;
        $PREV_FILE = $userImage;

        $imageExt = ['image/jpg', 'image/jpeg', 'image/png', 'image/webp'];

        if (count($_FILES) > 0) {
            if ($users->ImageValidate($_FILES['cover'], $PREV_FILE, $imageExt)) {
                $_POST['cover'] = $users->updateImage($_FILES['cover'], $PREV_FILE, $id);
                $users->update($id, $_POST);
                $errors['imagesuccess'] = "Banner changes successfully";
                echo json_encode($errors);

            } else {
                $errors = $users->errors;
                echo json_encode($errors);
            }
        }

    }


    function userbanner_fetch($id = NULL)
    {

        $users = new User();
        if (!empty($id)) {
            $userData = $users->where("users_id", $id);
            echo json_encode($userData);
        }

    }

    // Add Skill Function

    function skill_add()
    {
        $errors = [];
        $skills = new Skill();
        $_POST['date'] = date("Y-m-d");
        $_POST['user_id'] = Auth::user("users_id");
        $skills->insert($_POST);

        $errors['skill_add'] = "Data inserted successfully";

        echo json_encode($errors);
        die();
    }

    function fetch_skill()
    {
        $error = [];
        $skills = new Skill();
        $id = Auth::user('users_id');
        $data = $skills->where('user_id', $id);
        // show($data);
        echo json_encode($data);
        die();
    }


    // Change password code

    function changepassword()
    {
        $errors = [];
        $users = new User();
        $id = Auth::user('users_id');
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $users->update($id, $_POST);
        $errors['ChangePassword'] = "Password Changed Successfullly";
        echo json_encode($errors);
        die();
    }

    // Review System code
    function comment()
    {

        $errors = [];

        $reviews = new Review();



        if (count($_POST) > 0) {

            $_POST['review_date'] = date("Y-m-d");
            $id = $_POST['review_employee_id'];

            $reviews->insert($_POST);

            $_SESSION['msg'] = "Comment Posted";
            $_SESSION['status'] = 'success';

            $this->redirect("empdetail/employee_hire/" . $id);



        }


        $this->view("employee_hire", ['errors' => $errors]);

    }

}