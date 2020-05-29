<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
<?php
session_start();
//getting the variables from the register page
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$_SESSION['listOfErrors'] = array(); //making an array of error messages as a SESSION variable


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

//checking to see if email/user doesnt already exists

/*
$sql_check_email_query ="SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($db_connection, $sql_check_email_query); //running the query and storing in $result
$emailResult = mysqli_fetch_assoc($result);

if ($emailResult){ //if the result exists and is not null
    if($emailResult['email'] !== $email) {
        array_push($listOfErrors, "The email already exists in the DB");
    }
}


if ($result == false) {
    $echo ("There is a problem");
    $error_message = "Query error ('$->connect_errno') - with message ('$db_connection->connect_error')";
    array_push($listOfErrors, $error_message);
//	break;
}

*/


$myquery = "SELECT * FROM users where username = '$username'";
$result = mysqli_query($db_connection, $myquery);

 
if ($result->num_rows > 0) {
    $error_message = "You are already registered!";
    array_push($_SESSION['listOfErrors'], $error_message);
	//break;
}

$encryptedPassword = md5($password);

if (count($_SESSION['listOfErrors']) == 0) { //if the number of errors is 0, continue normally:
    //$password = md5($password_1);//encrypt the password before saving in the database
    $insert_query = "INSERT INTO users VALUES('$username', '$email', '$encryptedPassword')";
//  $insert_query = "INSERT INTO users(username, email, password) VALUES('$username', $email', '$password')";

    mysqli_query($db_connection, $insert_query);
    $_SESSION['username'] = $username; //setting the newly added user as the current username
    //$_SESSION['success'] = "You are now logged in";
    // header("Location loginscript.php");
    header("Location: ../index.php");
}
?>

<?php  if (count($_SESSION['listOfErrors']) > 0) : ?> <!-- If there are errors: -->
   <!-- <div class="error"> -->
        <?php
        header("Location: ../error.php");
        ?>
<!-- </div> -->
  <?php  endif ?>


<?php
//closing the connection
mysqli_close($db_connection);
?>
</body>