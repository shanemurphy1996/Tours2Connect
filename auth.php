<?php
session_start();
IF(!isset($_SESSION["username"])){
    header("Location: register.php");
    exit();
    
}
?>

