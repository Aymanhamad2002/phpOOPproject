<?php
include 'init.php';
if(isset($_POST['idToDelete'])){
    if(empty($_POST['idToDelete'])){
        $_SESSION['missingField'] = "Missing field";
        header("Location: deleteCourse.php");
        return;


    }
    else{
    $c = $manager->getCourse($_POST['idToDelete']);
    if($c === null){
        $_SESSION['notFound'] = "the id not found";
        header("Location: deleteCourse.php");
        return;
        
    }else{
        $_SESSION['idToDelete'] = $_POST['idToDelete'];
        $_SESSION['name'] = $c->getName();
        $_SESSION['credit'] =$c->getCredit();
        $_SESSION['sem'] = $c->getSem();
        $_SESSION['year'] = $c->getYear();
        header("Location: deleteCourse.php");
        return;}
    }
    

}
if(isset($_POST['delete'])){
    header("location:confirm.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="your-stylesheet4.css">
    <title>Document</title>
</head>
<body>
<h1 style = "color:red"><?php 
    $message = isset($_SESSION['missingField']) ? $_SESSION['missingField'] : false;
    unset($_SESSION['missingField']);
    echo $message;?></h1>

    <form method = 'post'>
        <p>ID TO DELETE <input type = 'text' name = 'idToDelete'>
        <input type = 'submit' value = 'ok'></p>

    </form>
   
    <h1 style = "color:red"><?php 
    $message = isset($_SESSION['notFound']) ? $_SESSION['notFound'] : false;
    unset($_SESSION['NotFound']);
    echo $message;?></h1>
    <?php
        

        
        if(isset($_SESSION['name'])&& isset($_SESSION['credit']) && isset($_SESSION['sem']) && isset($_SESSION['year'])){
            
           
            echo("<p>name: ".htmlentities($_SESSION['name'])."</p>");
            echo("<p>CreditNb: ".htmlentities($_SESSION['credit'])."</p>");
            echo("<p>Semester: ".htmlentities($_SESSION['sem'])."</p>");
            echo("<p>year: ".htmlentities($_SESSION['year'])."</p>");
            echo("<form method ='post'><input type = 'submit' name = 'delete' value = 'delete'></form> ");

        }
    
    ?>  
    <p><a href= index.php>MAIN PAGE</a></p>   
</body>
</html>