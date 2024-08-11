<?php
require_once 'CourseList.php';
include 'StudentList.php';

class Manager{
    private $courselist;
    private $studentlist;
    public function __construct(){
        $this->courselist = new CourseList();
        $this->studentlist = new StudentList();
    }
    public  function addCourse($course){
        $this->courselist-> add($course);
    }
    public function deleteCourse($id){
        $this->courselist->delete($id);
    }
    public function  addStudent($student){
        $this->studentlist->add($student);
    }

    public function getAllCourses(){
        return $this->courselist->getAllCourses();

    }
    public function getSomeCourses($year,$sem){
        return $this->courselist->getSomeCourses($year,$sem);
    }
    public function getStudent($id){
        return $this->studentlist->findById($id);
    }
    public function getStudents(){
        return $this->studentlist->getAllStudents();
    }
    public function getCourse($id){
        return $this->courselist->findById($id);
    }
    
    public function studentExist($id){
        return $this->studentlist->idExist($id);
    }
    public function courseExist($id) {
        return $this->courselist->idExist($id);
    }
    





}

?>