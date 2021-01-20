<!DOCTYPE html>
<html lang="en">
<head>
  <title>Forum</title>
  <meta charset="utf-8">
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
  <style type="text/css">
    html{
      height:80%;
    }

    body{background-image: url('img/ani.png'); background-repeat: no-repeat;
     background-position: top 250% center;} 
    .topic {
    color:#061E79;
    background-color:white;
    border-radius:5px;
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border:none;
    font-size:16px;
    font-weight:700;
    margin-left: 20px;
    padding:20px 35px;
  border:2px solid grey;


  
}
.topic-media__img{
  display: inline-block;
  width:1400px;
  padding-left: 7%;
}
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

    
  </style>
</head>
<body >

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
<div id="part2">
	<div class="row">
		<div class="col-lg-2"></div>
		<div class="col-sm-10">
			<a class = "topic" href="index1.php"> General Discussion </a>
			<a class = "topic"href="technical.php"> Technical</a>
      <a class = "topic" href="trending_news.php"> Trending News</a>
      <a class = "topic"href="placement.php">Interview</a>
      <a class = "topic" href="Syllabus.php"> Syllabus </a>
			<!-- <a href="create_topic.php" type="button" class="btn btn-info float-right">Start New Topic</a> -->
			
		</div>
	</div>
</div>
<br>



<div class="container">
  
 

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header" style="background-color: #46589A;">
          <h4 class="modal-title" style="color:white;">Member Registration</h4>
          <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>

        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="main" style="height:100%;">
    <form method="POST" action="add_user.php">
      <div class="form-group row">
        <label for="name" class="col-sm-3 col-form-label">Username* </label>
        <div class="col-sm-9">
          <input type="text" name="name" class="form-control" required="">
        </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-sm-3 col-form-label">Email Address* </label>
        <div class="col-sm-9">
          <input type="email" name="email" class="form-control" required="">
        </div>
      </div>
      <div class="form-group row">
        <label for="password" class="col-sm-3 col-form-label">Password* </label>
        <div class="col-sm-9">
          <input type="password" name="password" class="form-control" required="">
        </div>
      </div>
      <div class="form-group row">
        <label for="rule" class="col-sm-3 col-form-label">Forum Terms & Rules* </label>
        <div class="col-sm-9 form-check">
          <label class="form-check-label">
            <input type="checkbox" name="rule" class="form-check-input" value="yes" required=""> I agree to the Forum Terms and Rules
          </label>
        </div>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn " style="background-color: #46589A;color:white;">Create Account</button>
   </div>
        
     
         </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>






</body>
</html>


