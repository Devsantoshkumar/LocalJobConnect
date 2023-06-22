<?php

class Userprofile extends Controller
{
    function __construct()
    {
        if (!Auth::loggedIn()) {
            $this->redirect("signin");
        }
    }


    function index($id = NULL)
    {
        $errors = [];

        // Skill Code starts

        $skills = new Skill();

        if (!empty($_POST['skillData'])) {

            $_POST['date'] = date("Y-m-d");
            $_POST['user_id'] = Auth::user("users_id");
            $skills->insert($_POST);
            echo "Data inserted successfully";
            die();
        }

        $sData = $skills->where("user_id", Auth::user("users_id"));
        if (!empty($_GET['skills'])) {

            $output = "";
            if ($sData) {
                foreach ($sData as $srows) {
                    $output .= '<div class="d-flex align-items-center">
                    <i class="fa-solid fa-plus fw-bold me-2"></i>
                    <span>' . $srows->skill_name . '</span>
                </div>';
                }
                echo $output;
                die();
            } else
                $output .= '<div class="d-flex align-items-center">
                 <i class="fa-solid fa-plus fw-bold me-2"></i>
                 <span>No Record found</span>
             </div>';
            echo $output;
            die();
        }

        // Skill code ends

        // Education Code starts

        $educations = new Education();

        if (!empty($_POST['educationData'])) {

            $_POST['date'] = date("Y-m-d");
            $_POST['user_id'] = Auth::user("users_id");
            $educations->insert($_POST);
            echo "Data inserted successfully";
            die();
        }

        $eData = $educations->where("user_id", Auth::user("users_id"));

        if (!empty($_GET['educations'])) {

            // show($_GET['educations']);

            $result = "";

            if ($eData) {
                foreach ($eData as $erows) {
                    $result .= '<div class="d-flex align-items-center">
                                <i class="fa-solid fa-user-graduate fw-bold fs-5 me-2" style="color: #1cbe72;"></i>
                                <span>' . $erows->education_name . '</span>
                            </div>';
                }
                echo $result;
                die();
            } else {
                $result .= '<div class="d-flex align-items-center">
                <i class="fa-solid fa-user-graduate fw-bold fs-5 me-2" style="color: #1cbe72;"></i>
                <span>No Record found</span>
            </div>';
                echo $result;
                die();
            }


        }

        // Education code ends

        $user = new User();
        $data = $user->where("users_id", $id);


        // Bio Code Starts

        if (!empty($_POST['bioData'])) {
            // show($_POST['bio']);
            $bioid = $_POST['users_id'];
            unset($_POST['bioData']);
            $user->update($bioid, $_POST);
            echo "Data inserted Successfully";
            die();
        }


        if (!empty($_GET['bio'])) {

            // show($_GET['educations']);
            $bioOutput = "";
            foreach ($data as $brows) {
                $bioOutput .= '<div class="d-flex align-items-center">
                            <p>' . $brows->bio . '</p>
                        </div>';
            }
            echo $bioOutput;
            die();
        }

        // Bio Code Ends



        $this->view("userprofile", ['errors' => $errors, 'rows' => $data]);
    }

    function update($id = null)
    {

        $errors = [];


        $user = new User();

        $userimage = $user->where("users_id", $id);

        if (count($_POST) > 0) {

            $allowedTypes = ["image/jpeg", "image/jpg", "image/png"];

            if ($user->fileValidate($_FILES['image'], $allowedTypes)) {

                $_POST['image'] = $user->updateImage($_FILES['image'], $userimage, $id);
                $user->update($id, $_POST);

                $this->redirect("userprofile/" . Auth::user("users_id"));
            } else {
                $errors = $user->errors;
            }

        }

        $data = $user->where("users_id", $id);


        $this->view("editprofile", ['errors' => $errors, 'rows' => $data]);
    }
}


?>