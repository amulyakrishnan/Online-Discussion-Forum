 <!-- <?php
 //("home.php");
?>  -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script type="text/javascript">function goBack() {
  window.history.back();
}</script>
	<style>
		a{
  text-decoration: none !important;
   color:white;
    
    border-radius:1px;
    -moz-border-radius:1px;
    -webkit-border-radius:1px;
    border:none;
    font-size:16px;
    font-weight:500;
    margin-left: 2px;
    padding:4px 5px;

  
}
.topic:hover{
  background-color: #CAC9C9;
  text-decoration: none;
}
	textarea:focus, input:focus{
    outline: none;
}
input {
	width:90%;
	padding:3px;
	border-radius: 5px;
	
}
text{
	
	padding:3px;
	border-radius:5px;
	
}
</style>
</head>
<body>
	<nav class="navbar navbar-expand-md " style = "background-color: #46589A; ">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item" style="margin-right:7px;">
        <a class="nav-link" href="home.php" style = "text-decoration: none;color: white;">HOME</a>
      </li>
     <!--  -->
      <li class="nav-item" style="margin-right:7px;">
        <a class="nav-link" href="index.php"style = "text-decoration: none;color: white;">CALENDER</a>
      </li>
      <li class="nav-item" style="margin-right:7px;">
        <a class ="nav-link" href="#" data-toggle="modal" data-target="#LoginToggle"style = "text-decoration: none;color: white;">LOG IN</a>
      
      </li>
      <li class="nav-item" style="margin-right:7px;">
        <a class = "nav-link" href="#" data-toggle="modal" data-target="#myModal" style = "text-decoration: none;color: white;">REGISTER</a>
      </li>
    </ul>
    <!-- <ul class="navbar-nav ml-auto">
    	<li class="nav-item">
    		<a class="nav-link" href="#"><span class="fa fa-search"></span></a>
    	</li>
    </ul> -->
  </div>  
</nav>
<br>

  <div class="modal" id="LoginToggle">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #46589A;">
          <h4 class="modal-title text-center" style="color:white;">Login</h4>
          <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
        </div>
        <div class="modal-body">
          <form method="POST" action="login.php">
            <div class="form-group">
              <input type="text" name="email" placeholder="Username or Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name="password" placeholder="Password" class="form-control">
            </div>
            <div class="form-check">
              <label for="form-check-label" for="remember">
                <input type="checkbox" name="remember" class="from-check-input" value="remember"> Keep me logged in
              </label>
            </div>
            <button type="submit" class="btn btn-block" style="color: #46589A;font-weight:600;background-color: #f5f5f5">Log in</button>
            <div class="text-center">
              <p>Or</p>
              <p><a href="#" class="btn btn-block" data-toggle="modal" data-target="#myModal" style="font-weight:600;color:#46589A;background-color: #f5f5f5">Create an account</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
	
</div>
	<br>
	<br>
	<button onclick="goBack()" class="btn btn-info" style="margin-left: 2%;width:5%;margin-top:2%;background-color:#9E9E9E;border:none;">Go Back</button>
	<br>
<div class="container">
	<h4 ><u>TOPIC DETAILS</u></h4>
	<br>
	<form method="POST" action="add_topic.php">
		<div class="from-group row">
			<label for="name" class="col-sm-2 col-form-label">Name:</label>
			<div class="col-sm-10">
				<input type="text" name="name"   required="">
			</div>
		</div>
		<br>
		<div class="form-group row">
			<label for="email" class="col-sm-2 col-form-label">Email Address:</label>
			<div class="col-sm-10">
				<input type="email" name="email"  required="">
			</div>
		</div>
		<div class="form-group row">
			<label for="Title" class="col-sm-2 col-form-label">Title:</label>
			<div class="col-sm-10">
				<input type="text" name="title"  required="">
			</div>
		</div>
		<div class="form-group row">
			<label for="content" class="col-sm-2 col-form-label">Content:</label>
			<div class="col-sm-10">
				<textarea  class="text" rows="6" cols="113"  name="content"></textarea>
			</div>
		</div>
		<div class="from-group row">
			<label for="category" class="col-sm-2 col-form-label">Category:</label>
			<div class="col-sm-10">
				<select name="category"  style="width:90%;border-radius: 5px">
					<option style="background-color: #b491c8" value="tech">Technology</option>
					<option value="news">Trending News</option>
					<option value="Syllabus">Syllabus</option>
					<option value="Interview">Interview</option>
					<option value="programming">Programming</option>
					<option value="Career">Career</option>
				</select>
				
			</div>
		</div>
		<button type="submit" class="btn btn-info" style="margin-left: 18%;width:10%;margin-top:2%;background-color:#46589A;border:none;padding:1%">Post</button>
	</form>
</div>
</body>
</html>