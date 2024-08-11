<?php
require_once 'CourseList.php';

class Student{
    private $id;
    private $name;
    private $phone;
    private $email;
    private $courselist;


public function __construct($id, $name, $phone,$email){
    $this->id = $id;
    $this->name = $name;
    $this->phone = $phone;
    $this->email = $email;
    $this->courselist = new CourseList();
    
}
public function getId(){
    return $this->id;
}
public function getName(){
    return $this->name;
}
public function getPhone(){
    return $this->phone;
}
public function getEmail(){
    return $this->email;
}
public function addCourse($course){
        $this->courselist->add($course);
    
    
    
}
public function deleteCourse($id){
    $this->courselist->delete($id);

}
public function getCourses(){
    return $this->courselist->getAllCourses();
}
}






?>