<body>
<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION['listOfErrors'] = array();

//db connection
$hostname = "localhost";
$db = "projectdb";
$user = "root"; 
$pwd="";

$db_connection = mysqli_connect($hostname, $user, $pwd, $db);
if (mysqli_connect_error()) {
    $error_message = ("Connection Error (" . $connection->connect_errno .  ") with message ("
    . $connection->connect_error . ")");
    array_push($_SESSION['listOfErrors'], $error_message);
}
echo ("Database worked");




//checking to see if username is duplicate
$dbusername= null; 
$dbpassword= null; 
$sql_select = "SELECT * from users where username = '$username'";
$encryptedPassword = md5($password);
$result = mysqli_query($db_connection, $sql_select); //find the result of the matching username

while ($row=mysqli_fetch_array($result)) {
    $dbusername=$row["username"]; 
    $dbpassword=$row["password"]; 
    } 
    if (is_null($dbusername)) { //push the error message if the user already exists
        $error_message = "Username or password is incorrect.";
        //give a vague message of either username or password being wrong to avoid giving too much information
        array_push($_SESSION['listOfErrors'], $error_message);
    }
    else if ($dbpassword!=$encryptedPassword){ //push error message to error array if the password is incorrect
            //NOTE: We should change this to md5 hash function later on hopefully for security
            $error_message = "Username or password is incorrect.";
            array_push($_SESSION['listOfErrors'], $error_message);
    }

    if (count($_SESSION['listOfErrors']) == 0) { //if the number of errors is 0, continue normally:
     $_SESSION['username'] = $username; //set username as entered username
    header("Location: ../index.php");
}
?>

<?php  if (count($_SESSION['listOfErrors']) > 0) : ?> <!-- If there are errors, redirect to errors page -->
        <?php
        header("Location: ../error.php");
        ?>
  <?php  endif ?>

<?php
//closing the connection
mysqli_close($db_connection);
?>

</body>
