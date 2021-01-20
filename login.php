<?php
require("connect.php");
session_start();
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['password']);

$sql = mysqli_query($con,"SELECT name,email,password from users where email='$email' and $password = '$password'");
$row = mysqli_num_rows($sql);
if($row>0){
	$_SESSION['email'] = $email;
	header("location:home.php");
}else{
	echo "Sorry Not found try again";
}






?>