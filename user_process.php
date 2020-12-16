<?php
include("db_connect.php");
//if (isset($_POST['id'] && isset($_POST[name]) && isset($POST['email']) && isset($POST['number']) && isset($POST['message']))

  $name=$_REQUEST['name'];
  $email=$_REQUEST['email'];
  $message=$_REQUEST['message'];

  $query=mysqli_query($db_connect,"INSERT INTO `contactform`(`name`, `email`,`message`) VALUES ('$name','$email','$message')") or die(mysqli_error($db_connect));

  mysqli_close($db_connect);
