<?php
class register extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('app/mregister');
    }
     
    function register(){
        $firstname=$_POST['firstname'];
          $lastname=$_POST['lastname'];
             $email=$_POST['email'];
              $address=$_POST['address'];
                $phone=$_POST['phone'];
                $password=$_POST['password'];
                  
       $register= $this->mregister->add_user($firstname,$lastname,$phone,$email,$password,$address);
       
       if($register){
           echo 1;
       }
       else
           echo 0;
    }
     function login() {
          $email=$_POST['email'];
          $password=$_POST['password'];
            // Validate the user can login
        $result = $this->mregister->validate($email, $password);
          if($result){
           echo 1;
       }
       else
           echo 0;
    }
}

