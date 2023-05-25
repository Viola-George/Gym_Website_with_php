<?php
//session 
session_start();
unset($_SESSION["log"]);
unset($_SESSION["name"]);
header("Location:login.php");
?>
