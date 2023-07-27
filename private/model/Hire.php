<?php

class Hire extends Model
{
    protected $table = "hires";
    public $errors = [];

    protected $allowedColumns = [
        'emp_status',
        'employee_id',
        'employer_id',
        'offered_cost',
        'hiring_date',
        'hiring_description'
    ];


    public function validate($data)
    {
        $this->errors = [];

        if(isset($data['offered_cost'])){
            if (empty($data['offered_cost'])) {
                $this->errors['offered_cost'] = "*required";
            }
        }

        if(isset($data['hiring_description'])){
            if (empty($data['hiring_description'])) {
                $this->errors['hiring_description'] = "*required";
            }
        }

        if(isset($data['employee_id'])){
            if (empty($data['employee_id'])) {
                $this->errors['employee_id'] = "*required";
            }
        }


        if(isset($data['employer_id'])){
            if (empty($data['employer_id'])) {
                $this->errors['employer_id'] = "*required";
            }
        }


        if (count($this->errors) == 0) {
            return true;
        } else {
            return false;
        }
    }


}



?>