<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charsets="UTF-8" />
    <title>Second page</title>
    <script src="http://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body id="contact">
    <?php include "parts/logo.php"?>

    <h1 style="text-align:center">Contact Us</h1>
    <?php include "parts\header.php" ?>

    <h3>Please contact us at <b><u>info@M&J.com</u></b></h3>

    <div class="footer"> <?php include "parts/footer.php";?> </div>
    <script src="myScriptsPHP.js"></script>
</body>

</html>