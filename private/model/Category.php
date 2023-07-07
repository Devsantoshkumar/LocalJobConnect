<?php

class Category extends Model
{
    protected $table = "categorys";
    public $errors = [];

    protected $allowedColumns = [
        'category_name',
        'category_slug',
        'category_description',
        'category_status',
        'created_by',
    ];


    public function validate($data)
    {
        $this->errors = [];

        if (empty($data['category_name'])) {
            $this->errors['category_name'] = "Category is Required";
        }

        if (count($this->errors) == 0) {
            return true;
        } else {
            return false;
        }
    }

    // Creating a fileValidate function that validate the file 
    public function fileValidate($FILE, $allowedTypes, $previmg)
    {
        $this->errors = [];

        if (!empty($FILE['name'])) {
        }

        $imageName = $FILE['name'];
        $imageType = $FILE['type'];
        $imageError = $FILE['error'];
        $imageSize = $FILE['size'];

        // Checking for the size of the image

        if (!empty($previmg)) {


            if ($imageSize > 300000) {
                $this->errors['imagesize'] = "The size of the image is too large.";
            }

            // Checking for the empty file name

            if (empty($imageName)) {
                $this->errors['imageName'] = "The Image Name cannot be empty";
            }

            // Checking for the type of image

            if (!in_array($imageType, $allowedTypes)) {
                $this->errors['imageType'] = "Invalid Image Type";
            }

            // Checking for upload occur 

            if ($imageError !== 0) {
                $this->errors['imageErrors'] = "An error Occurs while uploading the image";
            }
        }
        if (count($this->errors) == 0) {
            return true;
        }



        return false;
    }


    public function hash_password($data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        return $data;
    }

    public function loginvalidate()
    {
        if (empty($name) || empty($email) || empty($password)) {
            $this->errors['login'] = "Enter valid Email and Password";
        }
    }
}



?>