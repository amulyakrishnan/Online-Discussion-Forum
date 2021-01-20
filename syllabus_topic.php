<?php
include_once("home.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<p>TOPIC DETAILS</p>
	<form method="POST" action="add_topic.php">
		<div class="from-group row">
			<label for="name" class="col-sm-2 col-form-label">Name</label>
			<div class="col-sm-10">
				<input type="text" name="name" class="form-control" required="">
			</div>
		</div>
		<div class="form-group row">
			<label for="email" class="col-sm-2 col-form-label">Email Address</label>
			<div class="col-sm-10">
				<input type="email" name="email" class="form-control" required="">
			</div>
		</div>
		<div class="form-group row">
			<label for="Title" class="col-sm-2 col-form-label">Title</label>
			<div class="col-sm-10">
				<input type="text" name="title" class="form-control" required="">
			</div>
		</div>
		<div class="form-group row">
			<label for="content" class="col-sm-2 col-form-label">Content</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="6" name="content"></textarea>
			</div>
		</div>
		<div class="from-group row">
			<label for="category" class="col-sm-2 col-form-label">Category</label>
			<div class="col-sm-10">
				
            <input type="text" name="category" class="form-control" required="" value="Syllabus Query">
			</div>
		</div>
		<button type="submit" class="btn btn-info" style="margin-left: 18%;margin-top:2%">Post</button>
	</form>
</div>
</body>
</html>