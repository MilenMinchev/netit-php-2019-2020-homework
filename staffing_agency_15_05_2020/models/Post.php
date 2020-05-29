<?php

namespace models;

class Post {
 
    // create 
    public static function create($title, $previewContent, $content) {
        
        $query = "INSERT INTO staffing_agency.posts(title, preview_contet, content) "
                . "VALUES('{$title}', '{$previewContent}', '{$content}')";
                
        \db\Database::getInstance()->query($query);
        return \db\Database::getInstance()->lastInsertedId();
    }
    
    // update
    public static function update() {
        
    }
    
    // remove / update 
    public static function delete() {
        $query = "DELETE * FROM staffing_agency.posts WHERE id = {$id}";
        \db\Database::getInstance()->query($query);
        return (\db\Database::getInstance()->affectedRows()== 1);
    }
    // fetch 
    public static function fetch($id = null) {

//        if(is_null($id)) {
//            
//            \db\Database::getInstance()->query("SELECT * FROM taffing_agency.posts");
//            return \db\Database::getInstance()->fetch();
//        }
//        
//        \db\Database::getInstance()->query("SELECT * FROM taffing_agency.posts WHERE id = {$id}");
//        return \db\Database::getInstance()->fetch();        
        
        $query = "SELECT * FROM staffing_agency.posts ";
        if($id) {
            $query = "$query WHERE id = {$id}";
        }
        
        \db\Database::getInstance()->query($query);
        return \db\Database::getInstance()->fetchCollection();
    }
}

//<?php
//
//namespace blogpost;
//    //staffing_agency.employ
//class BlogPost {
//    // create
//    public static function creat($title, $previewContent, $content) {
//        
//        $query = "INSERT INTO staffing_agency.employ(title, previw_content, content)"
//                ."VALUES('($title)','($previewContent)','($content)')";
//        
//        \db\Database::getInstance()->query($query);
//
//        return \db\Database::getInstance()->lastInsertedId();
//        
//    }
//    // update
//    
//    // remove / update
//    
//    // fetch
//    public static function fetch($id) {
//        //Двете заяваки са едни и същи!
//        $query = "SELECT * FROM staffing_agency.employ";
//        if($id){
//            $query = "$query WHERE id = ($id)";
//        }
//        
//         \db\Database::getInstance()->query($query);
//         return\db\Database::getInstance()->fetch();
//        
//        
//            
// //       if(is_null($id)){
// //           \db\Database::getInstance()->query("SELECT * FROM staffing_agency.employ");
// //           return\db\Database::getInstance()->fetch();
// //       }
// //       \db\Database::getInstance()->query("SELECT * FROM staffing_agency.employ WHERE id = ($id)");
// //       return\db\Database::getInstance()->fetch();
//    }
//    
//}

