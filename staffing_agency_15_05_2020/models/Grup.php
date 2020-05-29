<?php

namespace models;

class Group {
    
    public static function create($title, $priority){
        $query = "INSERT INTO staffing_agency.groups(title, priority) VALUES('{$title}',{$priority})";
        \db\Database::getInstance()->query($query);
        
        return \db\Database::getInstance()->lastInsertedId();
    }
    public static function update($id, $title) {
        $query = "UPDATE staffing_agency.groups SET title = '{$title}' WHERE id = {$id}";
        \db\Database::getInstance()->query($query);
        
        return(\db\Database::getInstance()->affectedRows()== 1);
        
    }
    public static function delete($id) {
        $query = "DELETE FROM staffing_agency.groups WHERE id = {$id}";
        \db\Database::getInstance()->query("DELETE FROM staffing_agency.groups WHERE id = {$id}");
        return(\db\Database::getInstance()->affectedRows()== 1);
    }
    public static function fetch($id = null) {
        
//        if($id){
//           $query = "SELECT * FROM staffing_agency.groups WHERE id = {$id}"; 
//        }
//        else {
//            $query = "SELECT * FROM staffing_agency.groups";
//        }
        
        $query = ($id) ?"SELECT * FROM staffing_agency.groups WHERE id = {$id}"
                       :"SELECT * FROM staffing_agency.groups";
        
        \db\Database::getInstance()->query($query);
        return \db\Database::getInstance()->fetchCollection();
    }
}

