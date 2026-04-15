<?php
session_start();
$username= $_POST["username"];
$name= $_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];




$hasusernameError= true;
$hasemailError= true;
$hasphoneError= true;
$hasnameError= true;
echo "<h2>Result</h2>";
echo "<h3>Username: $username</h3>";
echo "<h3>Name : $name </h3>";
echo "<h3>Email : $email </h3>";
echo "<h3>Phone : $phone </h3>";

if(!$username){
    $_SESSION["usernameErr"]="Username is required";
    $hasusernameError = true;

}else{
    unset($_SESSION["usernameErr"]);
    $hasusernameError=false;
}

if(!$name){
    $_SESSION["nameErr"]="Name is required";
    $hasnameError = true;

}else{
    unset($_SESSION["nameErr"]);
    $hasnameError=false;
}
if(!$email){
    $_SESSION["emailErr"]="Email is required";
    $hasemailError = true;

}else{
    unset($_SESSION["emailErr"]);
    $hasemailError=false;
}
if(!$phone){
    $_SESSION["phoneErr"]="Phone number is required";
    $hasphoneError = true;

}else{
    unset($_SESSION["phoneErr"]);
    $hasphoneError=false;
}

if($hasusernameError || $hasnameError || $hasphoneError || $hasemailError){
    Header("Location: ../view/form.php");
}else{
    echo "<h2><h2>";
}


?>