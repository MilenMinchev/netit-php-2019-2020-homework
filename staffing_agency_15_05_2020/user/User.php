<?php

namespace user;

class User {

    // public static $username     = NULL;
    // public static $email        = NULL;
    // public static $role         = NULL;
    // public static $isLoged      = false;

    public static function username() {
       return $_SESSION['user_reference']['username'];
    }

    public static function email() {
       return $_SESSION['user_reference']['username'];
    }    

    public static function role() {
       return $_SESSION['user_reference']['role'];
    }

    public static function isLoged() {
        return isset($_SESSION['user_reference']);
    }    

    public static function isNotLoged() {
        return !self::isLoged();
    }

    public static function isAdmin() {
        return (self::role() == 0);
    }

    public static function isRegular() {
        return self::role() > 0;
    }    

    // ???
    // TODO : think about the designe
    // Not very secured at all
    public static function set($userObject) {
        $_SESSION['user_reference'] = $userObject;

//        User::$username = $userObject['username'];
//        User::$email    = $userObject['email'];
//        User::$role     = $userObject['role'];
//        User::$isLoged  = true;
    }

    public static function login($email, $password) {

        if(User::isAvailable($email, $password)) {

            $password = md5($password);
            $queryResult = \db\Database::getInstance()->query("SELECT * FROM staffing_agency.users WHERE email = '{$email}' AND password = '{$password}'");
            return \db\Database::getInstance()->fetch();            
        }

        return false;
    }

    public static function isAvailable($email, $password) {

        // NB NB NB NB NB NB
        $password = md5($password);

        \db\Database::getInstance()->query("SELECT COUNT(*) AS number_of_rows FROM staffing_agency.users WHERE email = '{$email}' AND password = '{$password}'");
        $collection = \db\Database::getInstance()->fetch();

        return ($collection['number_of_rows'] == 1);        
    }


    // NB: return User object 
    // NB : who is going to manage the session
    public static function registration($username, $email, $password) {


        $password = md5($password);

        \db\Database::getInstance()->query("INSERT INTO staffing_agency.users(username, email, password, role) 
                        VALUES('{$username}', '{$email}', '{$password})', 1)");

        if(\db\Database::getInstance()->lastInsertedId()) {
            return true;
        }

        return false;
    }

    public static function logout() {
        session_destroy();
    }    

}

//<?php
//
///* user /Управлява действия по управление на потребителите спрямо базата дани. Проверява и вкарва данните в базата  */
//namespace user;
//class User {
//    
//    public static $fname     = NULL;
//    public static $lname     = NULL;
//    public static $email     = NULL;
//    public static $role      = NULL;
//    public static $password  = NULL;
//    public static $isLoged      =false;
//
//    public static function fname() {
//        return $_SESSION['user_reference']['fname']; 
//    }
//    
//    public static function lname() {
//        return $_SESSION['user_reference']['lname']; 
//    }
//    
//    public static function email() {
//        return $_SESSION['user_reference']['email']; 
//    }
//    
//    public static function role() {
//        return $_SESSION['user_reference']['role']; 
//    }
//    
//    public static function password() {
//        return $_SESSION['user_reference']['password']; 
//    }
//    
//    public static function isLoged() {
//        return isset($_SESSION['user_reference']); 
//    }
//    // три начина за проверка на ролята! --> AdminController.php
//    
//    public static function isAdmin() {
//      //return(User::role()==0);
//        return(self::role()==0);
//    }
//    
//    public static function isRegular() {
//        return(self::role() > 0);
//     // returnself::role() > 0 && self::role() == 5; За допълнителни изисквания!
//    }
//    
//    public static function isNotLoged() {
//        return!self::isLoged();
//    }
//    
//    //???
//    //Дали не обвързваме много логиката на Usera с ологиката на системата?
//    
//    public static function set($userObject){
//        $_SESSION['user_rference'] = $userObject;
//        
//        User::$fname     = $userObject('fname');
//        User::$lname     = $userObject('lname');
//        User::$email     = $userObject('email');
//        User::$role      = $userObject('role');
//        User::$password  = $userObject('password');
//        User::$isLoged   = true;
//    }
//
//    
//    
//    public static function login($email_hr, $password_hr){
//        
//        
//        if(User::isAvailable($email_hr, $password_hr)){
//            
//            \db\Database::getInstance()->query("SELECT * FROM staffing_agency.hr WEHRE email = '($email)' AND password = '($password)'");
//            return \db\Database::getInstance()->fetch();    
//        }
//        
//        return false;       
//    }
//        
//    public static function isAvailable($email_hr, $password_hr){
//        
//        $queryResult = \db\Database::getInstance()->query("SELECT COUHT(*) AS number_of_rows FROM staffing_agency.hr WEHRE email = '($email)' AND password = '($password)'");
//        //echo \db\Database::getInstance()->lastExecutedQuery();
//        //var_dump(\db\Database::getInstance()->showError());
//        //var_dump($queryResult);
//        
//        return ($collection['number_of_rows'] == 1);    
//        }
//
//
//        /* if($collection['number_of_rows'] == 1){
//            return true;
//        }
//            return false;
//          if(Scollection['number_of_rows'] ==0) {
//            return false;
//        }
//        
//           if(Scollection['number_of_rows'] > 1) {
//            return false;
//        }*/
//        
//    
//    //Върни ми user обект! retun User object
//    // кой създава сесията?
//    
//    public static function registration(){
//        \db\Database::getInstance()->query("INSERT INTO staffing_agency.hr('fname','lname','mobil','email','role','password') 
//                          VALUES ('$fname','$lname','$mobil','$email','$role','$password')");
//        
//        if(\db\Database::getInstance()->lastInsertedId()){
//            return true;
//        }
//        
//        return false;
//    }
//    
//    public static function logout() {
//        sessin_destroy();
//    }
//}