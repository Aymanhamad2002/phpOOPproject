<?php
require_once "Course.php";

class CourseList{
    private $courseList;
    private $total;
    public function __construct(){
        $this->courseList =  array();
        $this->total = 0 ;
    }
    public function add($course){
  
            $this->courseList[] = $course;
            $this->total += $course->getCredit();
   
    }
    public function getAllCourses(){
        return $this->courseList;

    }
    public function getSomeCourses($year,$semester){
        $temp = array();
        foreach($this->courseList as $key =>$value){
            if($value->getYear() == $year && $value->getSem() == $semester ){
                $temp[] = $value;

            }
        }
        return $temp;
    }
    public function getTotal(){
        return $this->total;
    }
    public function findById($id){
        foreach($this->courseList as $key=>$value){
            if($value->getId() == $id){
                return $value;
            }

    }
    return null;
}
    private function findIndex($id){
        foreach($this->courseList as $key=>$value){
            if($value->getId() == $id){
                return $key;
            }
        }
        return False;
    }
    public function delete($id){

        $index = $this->findIndex($id);
        if($index !== False){
        unset($this->courseList[$index]);
        }
    }
    public function idExist($id){
        foreach($this->courseList as $k=>$v){
             if($v->getId() === $id){
                 return true;
             }
         }
         return false;
   
    }




}



?>