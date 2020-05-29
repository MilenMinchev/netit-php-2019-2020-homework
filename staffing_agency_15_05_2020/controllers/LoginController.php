<?php
//Функцията Login проверява дали потребителя се намира в системата! всеки път не се създава нова сесия!
namespace controllers;

class LoginController {
    
    public function index() {
        
        if(isset($_POST) && isset($_POST['post_tokken'])) {
            
            $email      = $_POST['email'];
            $password   = $_POST['password'];
            
            // TODO : Optimize
            if(\user\User::isAvailable($email, $password)) { // 1. Count 
                
               $userObject = \user\User::login($email, $password); // 2. Count + Get
               \user\User::set($userObject);
               
               if(\user\User::role() == 1) {
                   redirect('index');
               }
               
               if(\user\User::role() == 0) {
                    header('Location: admin.php');
               }
            }
            
            \session\Session::setFlashMessage('error_message', 'Потребителя не е намерен в системата');
            
            
            // returnn proper message 
//            $_SESSION['error_message'] = array(
//                'message'           => 'Потребителя не е намерен в системата',
//                'is_visible'        => true,
//                'background_color'  => '#ff0000'
//            );
        }
    }
}

//<?php
////Функцията Login проверява дали потребителя се намира в системата! всеки път не се създава нова сесия!
//namespace controllers;
//
//class LoginController {
//    
//    public function index() {
//        
//         if(isset($_POST) && isset($_POST['post_tokken'])){
//             
//            $email_hr           = $_POST['email_hr'];
//            $password_hr        = $_POST['password_hr'];
//            
//            //TODO : Optimize
//            if(\user\User::isAvailable('$email_hr','$password_hr')){ // 1.Count 
//               
//               $userObject = \user\User::login('$email_hr','$password_hr'); //2. Count + Get
//               \user\User::set($userObject); 
////проверка на ролите/позицийте/!               
//               if(\user\User::role()==1){
//                   redirect('index');
//               }
//               
//               if(\user\User::role()==0){
//                   header('Location: admin.php');
//               }
//                
//                
//               
//            }
//                //echo 'Success registration';
//                // create new session
//            \session\Session::setFlashMessage('error_message','Потребителя не е намерен в системата');
//                // return proper message  
//         //   $_SESSION['error_message'] = array (
//         //     'message'          => 'Потребителя не е намерен в системата',
//         //     'is_visible'       => true,
//         //     'background_color' => '#ff0000'
//         //   );
//        }       
//    }
//}
