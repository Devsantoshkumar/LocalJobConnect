<?php

class Verify extends Model
{

    protected $table = "verifys";
    public $errors = [];

    protected $allowedColumns = [
            'otp',
            'expired',
            'email'
    ];


      public function validate($data){

         $this->errors = [];

         if(empty($data['otp'])){
            $this->errors['otp'] = "OTP is required.";
         }

         if(!empty($data['otp'])){
            if(!$this->where('otp',$data['otp'])){
               $this->errors['otp'] = "Invalid otp";
            }
         }
        
         if(count($this->errors) == 0){
            return true;
         }
         return false;
      }

}


?>