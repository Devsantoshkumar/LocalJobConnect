<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

function send_mail($recipient, $subject, $message)
{
    $mail = new PHPMailer();
    $mail->IsSMTP();                                            //Send using SMTP
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->Username   = 'yadavjatin137@gmail.com';                     //SMTP username
    // $mail->Password   = 'nrhyumcpqgwfmujy';                               //SMTP password
    $mail->Password   = 'agshniilqyvibmen';                               //SMTP password

    $mail->IsHTML(true);                                  //Set email format to HTML
    $mail->AddAddress($recipient, 'Santosh Kumar');     //Add a recipient             //Name is optional
    $mail->SetFrom('quietudestudio@gmail.com', 'Local Job Connect');
    $mail->Subject = $subject;
    $content = $message;

    $mail->MsgHTML($content);
    if(!$mail->Send()){
        return false;
    }else{
        return true;
    }
}


   
// function send_mail($recipient, $subject, $message){

//     $EmailHeaders = [
//         "MINE-Version: 1.0",
//         "Content-type: text/html; charset=utf-8",
//         "From: info@travelthrust.com"
//         ]; 
    
//     $EmailHeaders = implode("\r\n",$EmailHeaders);
    
//     $SendMail = mail($recipient, $subject, $message, $EmailHeaders);
    
//     if($SendMail){
//         return true;
//     }else{
//         return false;
//     }
    
// }
   

  
