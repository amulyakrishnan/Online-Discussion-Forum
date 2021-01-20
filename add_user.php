<?php
require("connect.php");
session_start();
$name = mysqli_real_escape_string($con,$_POST['name']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$rule = $_POST['rule'];

$sql = mysqli_query($con,"INSERT INTO users(name,email,password,rule)VALUES('$name','$email','$password','$rule')");
if($sql){
	$email = $_SESSION['email'];
	header("location:home.php");
}



?>