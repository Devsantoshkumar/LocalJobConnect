<!-- Skill Model class -->

<?php

class Skill extends Model
{
    protected $table = "skills";
    protected $errors = [];

    protected $allowedColumns = [
        'skill_name',
        'skill_description',
        'skill_status',
        'user_id',
        'date'
    ];

    // public function skillValidation($data)
    // {
    //     $this->errors = [];

    //     if (empty($data['skill_name'])) {
    //         $this->errors['Skill name'] = "Skill Name is Required";
    //     }
    //     if (strlen($data['skill_description'] > 100)) {
    //         $this->errors['skill_description'] = "Skill Description can be less than 100 words";
    //     }


    //     if (count($this->errors) == 0) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

}



?>