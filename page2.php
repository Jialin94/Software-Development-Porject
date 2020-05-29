<?php
session_start();
?>

<!DOCTYPE html> <!-- Nov 1 2nd page session/pages -->

<html lang="en">

<head>
    <meta charsets="UTF-8" />
    <title>Second page</title>
    <script src="http://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body id="page2">
    <?php include "parts/logo.php"?>

    <h1 style="text-align:center">Page 2</h1>
    <?php include "parts\header.php" ?>

    <h3>This is the 2nd page</h3>

    <div class="footer"> <?php include "parts/footer.php";?> </div>
    
    <script src="myScriptsPHP.js"></script>
</body>

</html>