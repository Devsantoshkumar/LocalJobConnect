<?php

class User extends Model
{
    protected $table = "users";
    public $errors = [];

    protected $allowedColumns = [
        'firstname',
        'lastname',
        'bio',
        'email',
        'email_varified',
        'phone',
        'password',
        'image',
        'cover',
        'token',
        'status',
        'date',
        'current_location',
        'hiring_status',
        'country_id',
        'state_id',
        'city_id',
        'skills_id',
        'rank',
        'educations_id'
    ];

    protected $beforeInsert = [
        'hash_password'
    ];



    public function validate($data)
    {
        $this->errors = [];

        if (empty($data['firstname']) || !preg_match('/^[a-zA-Z]+$/', $data['firstname'])) {
            $this->errors['firstname'] = "First Name is Required";
        }

        if (empty($data['lastname']) || !preg_match('/^[a-zA-Z]+$/', $data['lastname'])) {
            $this->errors['lastname'] = "Last Name is Required";
        }

        if (isset($data['email'])) {
            if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $this->errors['email'] = "Email is Required";
            }
        } else {
            unset($data['email']);
        }

        if (!empty($data['email'])) {
            if ($this->where('email', $data['email'])) {
                $this->errors['email'] = "<span class= 'fw-bold'>" . $data['email'] . "</span> is already exist";
            }
        }

        if (isset($data['password'])) {
            if (empty($data['password']) || !preg_match('/^[a-zA-Z0-9@$%]+$/', $data['password'])) {
                $this->errors['password'] = "Password is Required and It required at least a number or special character";
            }
        } else {
            unset($data['password']);
        }

        if (strlen($data['password'] < 5)) {
            $this->errors['password'] = "At least 6 Character are required in the password";
        }

        if (count($this->errors) == 0) {
            return true;
        } else {
            return false;
        }
    }

    // Creating a fileValidate function that validate the file 
    public function fileValidate($FILE, $allowedTypes)
    {
        $this->errors = [];

        if (!empty($FILE['name'])) {

        }

        $imageName = $FILE['name'];
        $imageType = $FILE['type'];
        $imageError = $FILE['error'];
        $imageSize = $FILE['size'];

        // Checking for the size of the image

        if ($imageSize > 300000) {
            $this->errors['imagesize'] = "The size of the image is too large.";
        }

        // Checking for the empty file name

        if (empty($imageName)) {
            $this->errors['imageName'] = "The Image Name cannot be empty";
        }

        // Checking for the type of image

        if (not_in_array($imageType, $allowedTypes)) {
            $this->errors['imageType'] = "Invalid Image Type";
        }

        // Checking for upload occur 

        if ($imageError !== 0) {
            $this->errors['imageErrors'] = "An error Occurs while uploading the image";
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