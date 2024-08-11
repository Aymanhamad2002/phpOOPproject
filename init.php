<?php
require_once "Manager.php";
session_start();
if(!isset($_SESSION['manager'])){
    $_SESSION['manager'] = new Manager();
}
$manager = $_SESSION['manager'];
?>