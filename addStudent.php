<?php
    include_once 'init.php';
   if(isset($_POST['studentId'])  && isset($_POST['studentName']) && 
    isset($_POST['email']) && isset($_POST['phone'])){
    if(empty($_POST['studentId']) || empty($_POST['studentName']) || empty($_POST['email']) || empty($_POST['phone'])){
        $_SESSION['missingField'] = "Missing fields";
        header("Location: addStudent.php");
        return;

        
        

    }else{
        if($manager->studentExist($_POST['studentId'])){
            $_SESSION['idexist'] = "the id is taken choose another id";
            header("Location: addStudent.php");
            return;
        }else{
            $student = new Student($_POST['studentId'],$_POST['studentName'],$_POST['phone'],$_POST['email']);
            $manager->addStudent($student);
            $_SESSION["studentadd"] = "A new Student has been added";
            header('Location: index.php');
            return;

        }
      

       }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="your-stylesheet1.css">
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
        <p>ID: <input name = 'studentId' type ='text'></p>
        <p>NAME: <input name = 'studentName' type = 'text'></p>
        <p>PHONE: <input name ='email' type = 'text'></p>
        <p>EMAIL: <input name = 'phone' type = 'email'></p>
        <p><input type = 'submit' > <input type = 'submit' value = 'back' formaction  ='index.php'></p>

    </form>
    
</body>
</html>