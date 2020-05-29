<!--
<div class='parent inline-flex-parent' style="width: 700px;
  margin-left: auto ;
  margin-right: auto ;">
  <div class='child'>
    
-->
<?php 
if (isset($_SESSION['username'])) {
  //if user is logged in
  ?>
  <ul>
  <li class="greeting"><b>Hello, <?php echo $_SESSION['username']?></b></li>
  <li><a id="navHome" href="index.php">Home Page</a></li>
  <li><a id="navPage2" href="page2.php">Page 2</a></li>
  <li style="float:right"><a id="navContact" href="contact.php">Contact Us</a></li>
  <li><a href="scripts/logoutscript.php">Logout</a></li>
</ul>
  <?php 
}

else { //when we are NOT logged in
  ?>
  <ul>
  <li><a id="navHome" href="index.php">Home Page</a></li>
  <li><a id="navPage2" href="page2.php">Page 2</a></li>
  <li><a id="navLogin"href="login.php">Login</a></li>
  <li><a id="navRegister" href="register.php">Register</a></li>
  <li style="float:right"><a id="navContact"href="contact.php">Contact Us</a></li>
</ul>
  <?php
}
?>

<!--
</div>

</div>
-->