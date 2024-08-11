<?php
include_once 'Student.php' ;

 class StudentList{

   private  $studentlist ;
   public function __construct(){
        $studentlist = array();

   }
   public function add($student){
        $this->studentlist[] = $student;

   }
   public function findById($id){
        foreach($this->studentlist as $k=>$v){
            if($v->getId() == $id){
                return $v;
            }
        }

   }
   public function idExist($id){
     foreach($this->studentlist as $k=>$v){
          if($v->getId() == $id){
              return true;
          }
      }
      return false;

 }

   
   public function getAllStudents(){
     return $this->studentlist;
   }



}
?>