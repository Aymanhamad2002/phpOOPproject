<?php
require 'init.php';
if(isset($_POST['studentId']) && isset($_POST['year']) && isset($_POST['semester'])){
    if(empty($_POST['studentId'])){
        $_SESSION['missingField'] = "Missing field";
        header("Location: register.php");
        return;
    }else{
        if(!$manager->studentExist($_POST['studentId'])){
        $_SESSION['notFound'] = "the id not found";
        header("Location: register.php");
        return;
        }else{
            $_SESSION['studentId'] = $_POST['studentId'];
            $student = $manager->getStudent($_POST['studentId']);
            $temp = $manager->getSomeCourses($_POST['year'],$_POST['semester']);
            $notregistered = array();
            $courseFound = false;
            foreach($temp as $k=>$v){
                $courseFound = false;
                foreach($student->getCourses() as $key =>$value){
                    if($v->getId() ==$value->getId() ){
                        $courseFound = true;
                        break;
                    }
                }
                if(!$courseFound){
                $notregistered []= $v;
            
            }

            }
            $_SESSION['notregistered'] = $notregistered;
            header("Location: register.php");
            return;

        }


    }
}


if(isset($_POST['courses'])){
    $student = $manager->getStudent($_SESSION['studentId']);
    $sum = 0 ;
    foreach($_POST['courses'] as $k=>$v){
        $course = $manager->getCourse($v);
        $sum  += $course->getCredit();

      }if($sum>=15){
        $_SESSION['creditError'] = 'Number of credit is higher from 15';
        header("Location:register.php");
        return;
      }else{
        foreach($_POST['courses'] as $k=>$v){
            $course = $manager->getCourse($v);
            $student->addCourse($course);
            
            
    
          }
          unset($_SESSION['studentId']);
            unset($_SESSION['notregistered']);
            $_SESSION['registeration'] = "registration has been done";
            header("Location:index.php");

            return;

      }
   

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="your-stylesheet.css">
    <title>Document</title>
</head>
<body>
<h1 style = "color:red"><?php 
    $message = isset($_SESSION['missingField']) ? $_SESSION['missingField'] : false;
    unset($_SESSION['missingField']);
    echo $message;?></h1>
    <h1 style = "color:red"><?php 
    $message = isset($_SESSION['notFound']) ? $_SESSION['notFound'] : false;
    unset($_SESSION['notFound']);
    echo $message;?></h1>
    
    <form  method = 'post' >
        <p>student id : <input type = 'text' name = 'studentId'></p>
        <p>YEAR: <select name = 'year'>
        <option value = '1' >First </option>
        <option value = '2' > Second</option>
        <option value = '3'> Third </option>
        </select>
        </p>
        <p>SEMESTER: <select name = 'semester'>
        <option value = '1' >First semester </option>
        <option value = '2' > Second semester </option>
        </select></p>
        <p><input type = 'submit' value = 'enter' name = "enter"></p>
    
</form>
    <?php
       
       echo("<form method='post'>"); // Add the opening <form> tag here

       if(isset($_SESSION['notregistered'])){
            if(count($_SESSION['notregistered'])==0){
            echo("<h1 style ='color:red'>NO COURSES FOUND</h1>");

            }
           echo('<table border="1">');
           foreach($_SESSION['notregistered'] as $k => $v){
               echo("<tr><td>");
               echo($v->getName());
               echo("</td><td>");
               echo($v->getCredit());
               echo("</td><td>");
               echo("<input type='checkbox' name='courses[]' value='".$v->getId()."'>");
               echo("</td></tr>");
           }
           echo('</table>');
           echo("<input type='submit' name='register' value='register'>");
           echo("</form>"); // Close the <form> tag here
       }

       

        


    ?>
    <h3 style = "color:red"><?php 
    $message = isset($_SESSION['creditError']) ? $_SESSION['creditError'] : false;
    unset($_SESSION['creditError']);
    echo $message;?></h3>
    <p><a href= index.php>MAIN PAGE</a></p> 

        

        
    
</body>
</html>