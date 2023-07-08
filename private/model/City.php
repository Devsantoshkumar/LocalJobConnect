<?php

class City extends Model
{
    protected $table = "citys";
    public $errors = [];

    protected $allowedColumns = [
        'city_name',
        'city_status',
        'state_id'
    ];


    public function validate($data)
    {
        $this->errors = [];

        if (empty($data['city_name'])) {
            $this->errors['city_name'] = "City is Required";
        }


        if (empty($data['state_id'])) {
            $this->errors['state_id'] = "State is Required";
        }


        if (count($this->errors) == 0) {
            return true;
        } else {
            return false;
        }
    }

}



?>