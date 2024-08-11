<?php
include_once "init.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="your-stylesheet3.css">
    
    <title>Document</title>
</head>
<body>
    <h1>DISPLAYING COURSES BY YEAR AND SEMESTER</h1>
    <form >
      <p><select name = 'year'>
        <option value = '1' >First </option>
        <option value = '2' > Second</option>
        <option value = '3'> Third </option>
    </select>
    <input type = 'submit' name = 'OK'></p>
    <p><select name = 'semester'>
        <option value = '1' >First semester </option>
        <option value = '2' > Second semester </option>
    </select></p>
    </form>
    <?php
        if(isset($_GET['year']) && isset($_GET['semester'])){
            $temp = $manager->getSomeCourses($_GET['year'],$_GET['semester']);
            $total = 0 ;
            echo('<table border = "1">');
            echo("<tr><td>");
            echo("id");
            echo("</td><td>");
            echo("name");
            echo("</td><td>");
            echo("creditnb");
            echo("</td></tr>");
            foreach($temp as $k =>$v){
            echo("<tr><td>");
            echo($v->getId());
            echo("</td><td>");
            echo($v->getName());
            echo("</td><td>");
            echo($v->getCredit());
            echo("</td></tr>");
            $total += $v->getCredit();

            }
            echo('</table>');
            echo('<p>Total credits Number : ' .$total.'</p');
            
        }
        
    
    ?>
    <p><a href= index.php>MAIN PAGE</a></p> 


    
</body>
</html>