<?php

session_start();

$con = mysqli_connect('localhost', 'root', 'Prithvi@2001');

mysqli_select_db($con, 'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from usertable where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['username'] = $name;
	header('location:home.php');
}else{
	$message = "Username // password incorrect try again.";
	echo "<script type='text/javascript'>alert('$message');</script>";
	//header('location:login.php');
}

?>