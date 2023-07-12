<?php

class Signup extends Controller
{

    function __construct(){
        if(Auth::loggedIn()){
            $this->redirect("/");
        }
    }

    function index()
    {
        $this->redirect("/");
    }

    function employee()
    {

        $errors = [];
        $formHeading = 'Register as a employee';

        $user = new User();
        $verify = new Verify();

        if(count($_POST)>0){
            
            if($user->validate($_POST)){
                
                $emailOtp = rand(111111,999999);
                $emailId = $_POST['email']; 
                $firstname = $_POST['firstname']; 
                $_POST['date'] = date("y-m-d H:i:s");
                $_POST['image'] = 'profile-default.png';
                $_POST['cover'] = 'banner-default.jpg';

                $message = "<b>Hello  Sir/Madam</b><br/><br/>";
                $message .= "Welcome to Local Job Connect <br/><br/>";
                $message .= "Your One Time Password (OTP) : <br/>";
                $message .= "<h1><b>". $emailOtp ."</b></h1><br/>";
                $message .= "Your OTP will expire in 5 min";

                $subject = "Email Varification OTP";
                $recipient = $emailId;
  
                $sendmail = send_mail($recipient, $subject, $message);

                if($sendmail){

                    $user->insert($_POST);
                    $_SESSION['EMAIL'] = $emailId;
                    $_SESSION['OTP'] = $emailOtp;
      
                    $_VAR['email'] = $emailId;
                    $_VAR['otp'] = $emailOtp;
                    $_VAR['expired'] = (time() + (60 * 5));
                    $verify->insert($_VAR);
                    $_SESSION['msg'] = "OTP send successfully. check mail";
                    $_SESSION['status'] = "success";
                    $this->redirect('signup/verify_email');
                  }else{
                    $_SESSION['msg'] = "Something problem. try again";
                    $_SESSION['status'] = "error";
                  }
                
            }else{
                $errors = $user->errors;
            }
        }


        $this->view("signup", ['errors' => $errors, 'formHeading'=>$formHeading]);
    }



    function employer()
    {

        $errors = [];
        $formHeading = 'Register as a employer';

        $user = new User();
        $verify = new Verify();

        if(count($_POST)>0){
            
            if($user->validate($_POST)){
                
                $emailOtp = rand(111111,999999);
                $emailId = $_POST['email']; 
                $firstname = $_POST['firstname']; 
                $_POST['date'] = date("y-m-d H:i:s");
                $_POST['image'] = 'profile-default.png';
                $_POST['cover'] = 'banner-default.jpg';

                $message = "<b>Hello  Sir/Madam</b><br/><br/>";
                $message .= "Welcome to Local Job Connect <br/><br/>";
                $message .= "Your One Time Password (OTP) : <br/>";
                $message .= "<h1><b>". $emailOtp ."</b></h1><br/>";
                $message .= "Your OTP will expire in 5 min";

                $subject = "Email Varification OTP";
                $recipient = $emailId;
  
                $sendmail = send_mail($recipient, $subject, $message);

                if($sendmail){

                    $user->insert($_POST);
                    $_SESSION['EMAIL'] = $emailId;
                    $_SESSION['OTP'] = $emailOtp;
      
                    $_VAR['email'] = $emailId;
                    $_VAR['otp'] = $emailOtp;
                    $_VAR['expired'] = (time() + (60 * 5));
                    $verify->insert($_VAR);
                    $_SESSION['msg'] = "OTP send successfully. check mail";
                    $_SESSION['status'] = "success";
                    $this->redirect('signup/verify_email');
                  }else{
                    $_SESSION['msg'] = "Something problem. try again";
                    $_SESSION['status'] = "error";
                  }
                
            }else{
                $errors = $user->errors;
            }
        }


        $this->view("signup", ['errors' => $errors, 'formHeading'=>$formHeading]);
    }






    function verify_email(){

        $errors = [];
        $user = new User();
        $verify = new Verify();
        
        if(count($_POST)>0){

            if($verify->validate($_POST)){

                $email = $_SESSION['EMAIL'];
                $otp = $_SESSION['OTP'];
                $time = time();

                $data = $verify->where('otp',$otp);

                if($data[0]->expired > $time){
                    $email = $data[0]->email;
                    $user->query("update users set email_varified = email where email = '$email'");
                    $userDataSignup = $user->where("email_varified", $email);
                    $userDataSignup = $userDataSignup[0];

                    if($userDataSignup[0]->type == 'employee'){

                        $_SESSION['msg'] = "Email verified successfully";
                        $_SESSION['status'] = "success";
                        $this->redirect('signup/location');

                    }else{
                        Auth::authenticate($userDataSignup);
                        $_SESSION['msg'] = "Registration successfully";
                        $_SESSION['status'] = "success";
                        $this->redirect('/');

                    }
                }else{
                    $_SESSION['msg'] = "OTP has expired. Send again";
                    $_SESSION['status'] = "error";
                }

            }else{
                $errors = $verify->errors;
            }
        }


        $this->view("verify_email", ['errors'=>$errors]);
    }




    function send_again(){

        $errors = array();

        $_VAR['email'] = $_SESSION['EMAIL'];
        $_VAR['otp'] = rand(111111,999999);
        $_VAR['expired'] = (time() + (60 * 5));

        $message = "<b>Hello Sir/Madam </b><br/><br/>";
        $message .= "Welcome to Local Job Connect <br/><br/>";
        $message .= "Your One Time Password (OTP) : <br/>";
        $message .= "<h1><b>". $_VAR['otp'] ."</b></h1><br/>";
        $message .= "Your OTP will expire in 5 min";

        $subject = "Email Varification OTP";
        $recipient = $_VAR['email'];
        $sendmail = send_mail($recipient, $subject, $message);

        if($sendmail){

            $verify = new Verify();

            $data = $verify->where('email',$_VAR['email']);
            $id = $data[0]->verifys_id;
            $verify->update($id,$_VAR);
            $_SESSION['OTP'] = $_VAR['otp'];
            $_SESSION['msg'] = "OTP has been send again";
            $_SESSION['status'] = "success";
            $this->redirect('signup/verify_email');
            
        }else{
            $_SESSION['msg'] = "Something wrong. Try again!";
            $_SESSION['status'] = 'error';
        }
    }


    public function location(){

        $errors = [];
        
        $category = new Category();
        $user = new User();
        $email = $_SESSION['EMAIL'];

        if(count($_POST)>0){
            
            if($user->validate($_POST)){

                $user->updateWithColumn("email_varified", $email, $_POST);
                $_SESSION['msg'] = "Registration successfully done";
                $_SESSION['status'] = "success";
                $userData = $user->where("email_varified", $email);
                $row = $userData[0];
                Auth::authenticate($row);
                $this->redirect("/");

            }else{
                $errors = $user->errors;
            }
        }

        $categoryData = $category->findAll();


        $this->view("user.location", ['errors'=>$errors, 'categories'=>$categoryData]);
    }



    public function fetch_countries(){

        $country = new Country();
        $data = $country->findAll();
        echo json_encode($data);
    }



    public function fetch_states($id=NULL){

        $state = new State();

        $data = $state->where("country_id", $id);

        echo json_encode($data);

    }


    public function fetch_cities($id=NULL){
        
        $city = new City();

        $data = $city->where("state_id", $id);

        echo json_encode($data);
    }



}


?>