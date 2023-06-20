<!-- Skill Model Class -->

<?php

class Skill extends Model
{
    protected $table = "skills";
    public $errors = [];

    protected $allowedColumns = [
        'skill_name',
        'skill_description',
        'user_id',
        'date'
    ];
}


?>