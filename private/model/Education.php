<!-- education Model class -->

<?php 

class Education extends Model{
    protected $table = "educations";
    protected $errors = [];

    protected $allowedColumns = [
        'education_name',
        'education_description',
        'education_status',
        'user_id',
        'date'
    ];

}



?>