<?php
session_start();
$username=$_SESSION["username"] ?? "";
$name=$_SESSION["name"]?? "";
$email=$_SESSION["email"]?? "";
$phone=$_SESSION["phone"]?? "";
$usernameError =$_SESSION["usernameErr"] ?? "";
$nameError =$_SESSION["nameErr"] ?? "";
$emailError =$_SESSION["emailErr"] ?? "";
$phoneError =$_SESSION["phoneErr"] ?? "";
unset($_SESSION["usernameErr"]);
unset($_SESSION["nameErr"]);
unset($_SESSION["emailErr"]);
unset($_SESSION["phoneErr"]);

?>
<!doctype html>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        
        <form method="post" action="../Controller/formValidation.php">
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" placeholder="enter username" value="<?php echo $username; ?>"/></td>
                    <td><p style='color:red;'><?php echo "$usernameError"; ?></p></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" placeholder="enter your name" value="<?php echo $name; ?>"/></td>
                    <td><p style='color:red;'><?php echo "$nameError"; ?></p></td>
                </tr>  
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" placeholder="enter email" value="<?php echo $email; ?>"/></td>
                    <td><p style='color:red;'><?php echo "$emailError"; ?></p></td>
                </tr>                              
                <tr>
                    <td>Phone Number</td>
                    <td><input type="text" name="phone" placeholder="enter phone number" value="<?php echo $phone;?>"/></td>
                    <td><p style='color:red;'><?php echo "$phoneError"; ?></p></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit"/></td>
                </tr>    
            </table>
        </form>
    </body>
</html>