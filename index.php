<?php

session_start();

//Can now use the #_SESSION[] array variable

//$_SESSION['username'] = 'myUser';

//session_unset();
//session_destroy();
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charsets="UTF-8" />
    <title>M&J Website</title>
    <script src="http://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body id="home">
    <?php include "parts/logo.php"?>

    <h1 class="transition" style="text-align:center">Welcome!</h1>
    
    <?php include "parts/header.php";?>
    <h3>This is the home page</h3>

    
    <div class="footer"> <?php include "parts/footer.php";?> </div>
    <script src="myScriptsPHP.js"></script>
</body>

</html>