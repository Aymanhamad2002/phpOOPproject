<?php
class Course{
   private $courseId;
   private $name;
   private $creditNb;   
   private  $year; 
   private $semester;
   public function __construct($courseId,$name,$creditNb,$year,$semester){
        $this->name = $name;
        $this->courseId = $courseId;
        $this->creditNb = $creditNb;
        $this->year = $year;
        $this->semester = $semester;
    
   }
   public function getName(){
    return $this->name;

}
   public function getId(){
        return $this->courseId;

   }
   public function getCredit(){
        return $this->creditNb;

   }
   public function getYear(){
        return $this->year;

   }
   public function getSem(){
        return $this->semester;
   }

}

?>