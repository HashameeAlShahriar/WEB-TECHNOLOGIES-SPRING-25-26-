<?php 
session_start();
$username = $_SESSION["username"] ?? "";

$isLoggedIn = $_SESSION["isLoggedIn"] ?? false;

if(!$isLoggedIn){
    Header("Location: login.php");
    exit();
}

$isCookieFound = isset($_COOKIE["username"]);

$selectedFood = $_COOKIE["username"] ?? "";



?>

<html>
    <body style="background-color: lightgoldenrodyellow;">
        <a href="../controller/logout.php">Logout</a>
    </body>

    <?php 
    if($isCookieFound){
    echo "<div>
        
        <p>click <a href='../controller/deleteCookie.php'>Here</a> to delete cookie</p>
    </div>";
    } else{
    echo "<form method='post' action='../controller/registrationData.php'>
        <label>Enter your username: </label>
        <input type='text' name='username' placeholder='Enter your user name'/>
        <input type='submit' name='submit'/>
    </form>";
    }

    ?>

   

    
</html>