<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Error Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
<?php
session_start();

//using a for each loop to go through all errors in listOfErrors array
foreach ($_SESSION['listOfErrors'] as $error) : ?>
    <h3 style="text-align:center"><?php echo $error ?></h3> <!--printing out the error-->
<?php
?>
  <?php endforeach ?>
<h4 style="text-align:center">Redirecting to <a href="index.php">Home Page</a>...</h2>
<br/>
<br/>

<div class="loader" align="center"></div>

<?php
//unsetting error session variable
unset($_SESSION['listOfErrors']);
//Below has a delay before redirecting but the alert freezes the page anyway
header("refresh:2;url=index.php" );
?>