<?php
    require_once "init.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="your-stylesheet2.css">
    <title>Document</title>
</head>
<body>
    <h1>MAIN PAGE </h1>

    <h2 style = "color:green"><?php 
   $message = isset($_SESSION['courseadd']) ? $_SESSION['courseadd'] : false;
   unset($_SESSION['courseadd']);
   echo $message;?></h2>
    <h2 style = "color:green"><?php 
   $message = isset($_SESSION['studentadd']) ? $_SESSION['studentadd'] : false;
   unset($_SESSION['studentadd']);
   echo $message;?></h2>
    <h2 style = "color:green"><?php 
   $message = isset($_SESSION['courseDeleted']) ? $_SESSION['courseDeleted'] : false;
   unset($_SESSION['courseDeleted']);
   echo $message;?></h2>
   <h2 style = "color:green"><?php 
   $message = isset($_SESSION['registeration']) ? $_SESSION['registeration'] : false;
   unset($_SESSION['registeration']);
   echo $message;?></h2>

    <p><a href = 'addCourse.php'>Enter a course</a></p>
    <p><a href = 'displayCourses.php'>Display courses by semester and year </a></p>
    <p><a href = 'deleteCourse.php'>delete a course</a> </p>
    <p><a href = 'addStudent.php'>Add Student</a></p>
    <p><a href = 'register.php'>registration</a></p>
    <p><a href = 'displayStudent.php'>display Student courses</a></p>
    <?php
    
        
    
    ?>


    
</body>
</html>