<?php

class Review extends Model
{
    protected $table = "reviews";
    protected $errors = [];

    protected $allowedColumns = [
        'review_star',
        'review_description',
        'review_date',
        'review_employer_id',
        'review_employee_id'
    ];

}



?>