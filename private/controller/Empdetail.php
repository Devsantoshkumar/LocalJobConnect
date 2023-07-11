<?php


class Empdetail extends Controller
{

    function index($id = NULL)
    {

        $users = new User();
        $category = new Category();

        $userdata = $users->query("SELECT * FROM users LEFT JOIN countrys ON users.country_id LEFT JOIN states ON users.state_id LEFT JOIN citys ON users.city_id WHERE users_id = $id");

        $jobCategories = $category->findAll();

        $this->view("employee_detail", ['userId' => $id, 'userData' => $userdata, 'jobCategories' => $jobCategories]);
    }


    function edit_emp_info($id = NULL)
    {

    }


    function employee_hire()
    {


        $this->view("employee_hire");
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

}