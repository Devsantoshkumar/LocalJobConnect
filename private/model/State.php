<?php

class State extends Model
{
    protected $table = "states";
    public $errors = [];

    protected $allowedColumns = [
        'state_name',
        'state_status',
        'country_id'
    ];


    public function validate($data)
    {
        $this->errors = [];

        if (empty($data['state_name'])) {
            $this->errors['state_name'] = "State is Required";
        }

        if (empty($data['country_id'])) {
            $this->errors['country_id'] = "Country is Required";
        }

        if (count($this->errors) == 0) {
            return true;
        } else {
            return false;
        }
    }

}



?>