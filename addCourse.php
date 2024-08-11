<?php
include_once 'init.php';
    if(isset($_POST['id']) && isset($_POST['name']
    ) && isset($_POST['credit']) && isset($_POST['year']) && isset($_POST['sem'])){
        if(empty($_POST['id']) || empty($_POST['name']) || empty($_POST['credit']) || empty($_POST['year'])){
            $_SESSION['missingField'] = "Missing fields";
            header("Location: addCourse.php");
            return;
        }else{
            if($manager->courseExist($_POST['id'])){
                $_SESSION['idexist'] = "the course id is already assigned";
                header("Location: addCourse.php");
                return;
            }else{
                $c = new Course($_POST['id'],$_POST['name'],$_POST['credit'],$_POST['year'],$_POST['sem']);
                $manager->addCourse($c);
                 $_SESSION["courseadd"] = "A new course has been added";
                header("Location: index.php");
                return;}
     }

    
        
    }else if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['credit']) && isset($_POST['year'])){
        $_SESSION['missingField'] = "Missing fields";
        header("Location: addCourse.php");
        return;
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
    $message = isset($_SESSION['idexist']) ? $_SESSION['idexist'] : false;
    unset($_SESSION['idexist']);
    echo $message;?></h1>
    <form method = 'post'>
        <p>ID <input type = 'text' name = 'id' ></p>
        <p>NAME <input type = 'text' name = 'name'></p>
        <p>CREDIT NUMBER  <input type = 'text' name = 'credit'></p>
        <p>YEAR <select name = 'year'>
            <option value = '1' > 1 </option>
            <option value = '2' > 2 </option>
            <option value = '3' > 3 </option>
        </select>
        </p>
         <p>first Semester<input type = 'radio' name = 'sem' value = '1' ></p>
        <p> second Semester <input type = 'radio' name = 'sem' value = '2' ></p>
        <p><input type = 'submit' > <input type = 'submit' value= 'back' formaction  ='index.php'></p>
    </form>
    



        
    
</body>
</html>
