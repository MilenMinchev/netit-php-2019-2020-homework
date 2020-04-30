<?php
/*Форма за събиране на данни по регистрация*/
namespace controllers;

class RegistrationController {
    
    
    public function index() {
                
        if(isset($_POST) && isset($_POST['post_tokken'])) {
            
            $username   = $_POST['username'];
            $email      = $_POST['email'];

            // NB : store the password in secure way ???
            $password   = $_POST['password'];            
            
            if(\user\User::registration($username, $email, $password)) {
                echo "Success registration";
            }
        }
    }
}
//<?php
///*Форма за събиране на данни по регистрация*/
//namespace controllers;
//
//class RegistationController{
//    
//    public function index() {
//        
//        if(isset($_POST) && isset($_POST['post_tokken'])){
//            $fname           = $_POST['fname'];
//            $lname           = $_POST['lname'];
//            $email           = $_POST['email'];
//            $mobile          = $_POST['mobile'];
//            $role            = $_POST['role'];
//            $password        = $_POST['password'];
//            $repeat_password = $_POST['repeat_password'];
//            
//            if(\user\User::registration('$fname','$lname','$mobil','$email','$role','$password')){
//                echo 'Success registration';
//            }
//                    
//        }
//                        
//       // var_dump($_POST);
//    }
//}

