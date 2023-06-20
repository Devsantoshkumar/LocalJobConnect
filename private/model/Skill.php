<?php 

class Skill extends Model{
    protected $table = "skills";
    protected $errors = [];

    protected $allowedColumns = [
        'skill_name',
        'skill_description',
        'skill_status',
        'user_id',
        'date'
    ];

}



?>