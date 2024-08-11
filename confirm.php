<?php
include 'init.php';
    if(isset($_POST['confirm'])){
        $manager->deleteCourse($_SESSION['idToDelete']);
        unset($_SESSION['idToDelete']);
            unset($_SESSION['name']);
            unset($_SESSION['credit']);
            unset($_SESSION['year']);
            unset($_SESSION['sem']);
            $_SESSION['courseDeleted']  = "A course has been successifly deleted";
        header("location: index.php");
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
    <p>DO YOU WANT TO DELTE THE COURSE NAME <?php
    if(isset($_SESSION['idToDelete'])){
        $temp = $manager->getCourse($_SESSION['idToDelete']);
        echo($temp->getName());
    }?></p>
    <form  method = 'post'>
        <input type = 'hidden' name = 'confirm' value ='<?php echo($_SESSION['idToDelete']);?>;'>

        <input type = 'submit' >
    
</body>
</html>