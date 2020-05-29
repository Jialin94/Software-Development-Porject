<!DOCTYPE html>

<?php
session_start();
if(isset($_SESSION["username"])){ //if the username variable is set meaning they are logged in
    $alertmessage = "You are already logged in!";
    echo "<script type='text/javascript'>alert('$alertmessage');</script>";
    //Below has a delay before redirecting but the alert freezes the page anyway
    header("refresh:1;url=index.php" );
//    header("Location: index.php");
exit();
}
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

<body id="loginPage">
    <?php include "parts/logo.php"?>

<h1 style="text-align:center">Login</h1>
<?php include "parts/header.php";?>

<br/>
<br/>

<div class="myForm">
    <form action="scripts/loginscript.php" method="post">
    <label class="login">Username<input class="login" type="text" name="username" value="" required autofocus/></label>
    <label class="login">Password<input class="login" type="password" name="password" value="" required/></label>
    <label class="login"><input class="login orange" type="submit" name="submit" value="Submit"></label>
    </form>
</div>

    <p><a href="forgot.php"><b>Forgot Password</b></a></p>

    <div class="footer"> <?php include "parts/footer.php";?> </div>
</body>