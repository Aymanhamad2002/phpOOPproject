<?php 
require_once 'init.php';
if(isset($_POST['idSelected'])){
    if(empty($_POST['idSelected'])){
        $_SESSION['missingField'] = "Missing field";
        header("Location: displayStudent.php");
        return;
    }else{
        if(!$manager->studentExist($_POST['idSelected'])){
        $_SESSION['notFound'] = "the id not found";
        header("Location: displayStudent.php");
        return;
        }else{
            $_SESSION['idSelected'] = $_POST['idSelected'];
            $student = $manager->getStudent($_POST['idSelected']);
            $temp  = $student->getCourses();
            $_SESSION['temp'] =$temp;

        }
    

}
}
;
if(isset($_POST['courses'])){
    $student = $manager->getStudent($_SESSION['idSelected']);
    if(($student != null)){
    foreach($_POST['courses'] as $k=>$v){
       
        $student->deleteCourse($v);

    }
    
  
    }
    unset($_SESSION['idSelected']);
    unset($_SESSION['temp']);
    header("Location:index.php");
    return;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="your-stylesheet6.css">
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
    
    <form method = 'post'>
        <p> STUDENT id: <input type = 'text' name = 'idSelected'>  <input type = 'submit' ></p>
    </form>
    <?php 
        
            
            echo('<table border = "1">');
            echo("<form method = 'post'>");
            if(isset($_SESSION['temp']))
            {
            if(count($_SESSION['temp'])==0){
                echo("<h1 style ='color:red'>NO COURSES FOUND</h1>");

            }
            else{
            foreach($_SESSION['temp'] as $k=>$v){
                echo("<tr><td>");
                echo($v->getName());
                echo("</td><td>");
                echo("<input type = 'checkbox' name ='courses[]' value ='".$v->getId()."'>");
                echo("</td></tr>");

            }
            echo('</table>');
            echo("<input type = 'submit' name = 'delete'  value = 'delete'>");
            echo("</form");
        }
    }
        
    
    
    ?>
    <p><a href= index.php>MAIN PAGE</a></p> 


    
    
</body>
</html>