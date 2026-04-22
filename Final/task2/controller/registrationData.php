<?php 

$username = $_POST["username"];

setcookie("username", $username, time()+3600*24*30, "/");
Header("Location: ../view/dashboard.php");

?>