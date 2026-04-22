<?php
session_start();
$username= $_POST["username"];
$conpass= $_POST["conpass"];
$email=$_POST["email"];
$password=$_POST["password"];




$hasusernameError= true;
$hasemailError= true;
$haspassError= true;
$hasconpassError= true;


if(!$username){
    $_SESSION["usernameErr"]="Username is required";
    $hasusernameError = true;

}else{
    unset($_SESSION["usernameErr"]);
    $hasusernameError=false;
}

if(!$password || strlen($password)< 6){
    $_SESSION["passErr"]="min 6 chars is required";
    $haspassError = true;

}else{
    unset($_SESSION["passErr"]);
    $haspassError=false;
}
if(!$email){
    $_SESSION["emailErr"]="Email is required";
    $hasemailError = true;

}else{
    unset($_SESSION["emailErr"]);
    $hasemailError=false;
}
if(!$conpass=$password){
    $_SESSION["conpassErr"]="must match password";
    $hasconpassError = true;

}else{
    unset($_SESSION["conpassErr"]);
    $hasconpassError=false;
}

if($hasusernameError || $haspassError || $hasconpassError || $hasemailError){
    Header("Location: ../view/dashboard.php");
}else{
    echo "<h2><h2>";
}


?>