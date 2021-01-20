<?php
// include_once("home.php");
include_once("connect.php");
session_start();

$name = mysqli_real_escape_string($con,$_POST['name']);
$email= mysqli_real_escape_string($con,$_POST['email']);
$title = mysqli_real_escape_string($con,$_POST['title']);
$content = mysqli_real_escape_string($con,$_POST['content']);
$category = mysqli_real_escape_string($con,$_POST['category']);
$date_ad = date("d/m/Y");

$sql = mysqli_query($con,"SELECT name from users where email = '$email'");
$row = mysqli_num_rows($sql);
if($row>0){
	$query = mysqli_query($con,"INSERT INTO content(email,title,content,category,date)VALUES('$email','$title','$content','$category','$date_ad')");
	if($query){
		header("location:show_content.php");
	}else{
		echo "Try again!!!!";
		die("Error : ".mysqli_error($con));
	}
}else{
	echo "First register yourself";
}


?>