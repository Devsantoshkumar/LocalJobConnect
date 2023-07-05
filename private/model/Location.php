<!-- Location Model -->

<?php

class Location extends Model
{
    protected $table = "locations";
    protected $errors = [];

    protected $allowedColumns = [
        'locations_id',
        'country',
        'state',
        'city',
        'pin_code',
        'location_status'
    ];

}



?>