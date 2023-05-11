<?php

class User extends Model
{
    protected $table = "users";
    protected $errors = [];
    
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
        'educations_id'
    ];

    protected $beforeInsert = [
        'hash_password'
    ];



    public function validate($data)
    {
        $this->errors = [];

        if (empty($data['firstname'])) {
            $this->errors['firstname'] = "First Name is Required";
        }
   
        if (empty($data['lastname'])) {
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
            if (empty($data['password'])) {
                $this->errors['password'] = "Password is Required";
            }
        } else {
            unset($data['password']);
        }

        if (count($this->errors) == 0) {
            return true;
        } else {
            return false;
        }
    }


    public function hash_password($data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        return $data;
    }




    public function loginvalidate(){
        if(empty($name) || empty($email) || empty($password));  
    }
}



?>