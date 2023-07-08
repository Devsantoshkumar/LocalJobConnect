<?php

class Country extends Model
{
    protected $table = "countrys";
    public $errors = [];

    protected $allowedColumns = [
        'country_name',
        'country_status'
    ];

    
    public function validate($data)
    {
        $this->errors = [];

        if (empty($data['country_name'])) {
            $this->errors['country_name'] = "Country is Required";
        }

        if (count($this->errors) == 0) {
            return true;
        } else {
            return false;
        }
    }

}



?>