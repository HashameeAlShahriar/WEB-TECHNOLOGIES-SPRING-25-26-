<?php
session_start();
$username=$_SESSION["username"] ?? "";

$email=$_SESSION["email"]?? "";
$password=$_SESSION["password"]?? "";
$conpass=$_SESSION["conpass"]?? "";
$usernameError =$_SESSION["usernameErr"] ?? "";

$emailError =$_SESSION["emailErr"] ?? "";
$passError =$_SESSION["passErr"] ?? "";
$conpassError=$_SESSION["conpass"]?? "";
unset($_SESSION["usernameErr"]);

unset($_SESSION["emailErr"]);
unset($_SESSION["passErr"]);
unset($_SESSION["conpassErr"]);
//$isLoggedIn = $_SESSION["isLoggedIn"] ?? false;
//if($isLoggedIn){
//    Header("Location: dashboard.php");
//    exit();
//}

?>
<!doctype html>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        
        <form method="post" action="../controller/formValidation.php">
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" placeholder="enter username" value="<?php echo $username; ?>"/></td>
                    <td><p style='color:red;'><?php echo "$usernameError"; ?></p></td>
                </tr>
                 
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" placeholder="enter email" value="<?php echo $email; ?>"/></td>
                    <td><p style='color:red;'><?php echo "$emailError"; ?></p></td>
                </tr>                              
                <tr>
                    <td>Password</td>
                    <td><input type="Password" name="password" placeholder="enter your password" value="<?php echo $password;?>"/></td>
                    <td><p style='color:red;'><?php echo "$passError"; ?></p></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td><input type="Password" name="conpass" placeholder="again enter your password" value="<?php echo $conpass;?>"/></td>
                    <td><p style='color:red;'><?php echo "$conpassError"; ?></p></td>
                </tr>                
                <tr>
                    <td><input type="submit" name="submit"/></td>
                </tr>    
            </table>
        </form>
    </body>
</html>