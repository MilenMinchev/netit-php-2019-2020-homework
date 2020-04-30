<?php

namespace config;

class Config {
    
    public static function db($dbHandler = null) {
        
        if($dbHandler == 'test') {
            
            return array(
                'db_host' => 'localhost',
                'db_user' => 'root',
                'db_name' => 'staffing_agency_test',
                'db_pass' => ''
            );            
        }
        
        if($dbHandler == 'prod') {
            
            return array(
                'db_host' => 'localhost',
                'db_user' => 'root',
                'db_name' => 'staffing_agency_prod',
                'db_pass' => ''
            );            
        }        
        
        return array(
            'db_host' => 'localhost',
            'db_user' => 'root',
            'db_name' => 'staffing_agency',
            'db_pass' => ''
        );
    }
}


//<?php
//// Конфигорационен клас за работа с база
///* 
// Ще пази глобални стойносто които да се използват в рамките на цялото приложение!
// */
//namespace config;
//
//class Config {
//    
//    //public const MASTER_VERSION = 10;// Статична Променлива/Константа/ която не се променя!Винаги има стойност.
//
//    //public static $applicationTitle   = "Staffing agency"; // Статична инстанция!Променя стойноста на класа!
//    //public $applicationVersion = 1; // Динамична инстанция!
//    //Статичн /Метод/ Конфигорации, набор от действия преди да се върне финалната стойност!
//    
//    public static function db() {
//        
//        return array(
//            'db_host' => 'localhost',
//            'bd_user' => 'root',
//            'bd_user' => 'Staffing agency',
//            'bd_user' => '',
//            );
//        }
//}