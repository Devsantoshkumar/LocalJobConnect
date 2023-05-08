<?php

class Test extends Model
{
    protected $table = "tests";
    protected $errors = [];
    
    protected $allowedColumns = [
        'name',
        'email',
        'image'
    ];

    public function validate($data)
    {
        $this->errors = [];

        if (empty($data['name'])) {
            $this->errors['name'] = "First Name is Required";
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

        if (count($this->errors) == 0){
            return true;
        } else {
            return false;
        }
    }

}



?>