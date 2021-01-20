<?php
include_once("home.php");
include_once("connect.php");
$sql = mysqli_query($con,"SELECT name from users");

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.a{font-size: 40px;padding: 10px;background-color: #337ab7; border-radius: 10px; color: white;margin: 25px; width: 150px;
			display: inline; height: 150px;}
		h3{margin-bottom: 20px; font-size: 30px;}
	</style>
</head>
<body>
<div class="container">
	<div >
		<h3 class="text-center">MEMBERS OF FORUM</h3>
		<?php 
			while($row = mysqli_fetch_array($sql)){
				echo '
					   <div class="a">'.$row['name'].'</div>
				';
			}
		?>
	</div>
</div>
</body>
</html>