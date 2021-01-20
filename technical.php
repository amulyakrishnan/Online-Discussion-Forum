<?php
require("connect.php");

$sql = mysqli_query($con,"SELECT title,content,id,date,email FROM content where category='tech' order by title desc");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">

	<style type="text/css">
		.over{height: 27px;overflow: hidden;}
		.card{margin-bottom: 10px;border-color: #9E9E9E;}
		h3{
			margin-left: 50px;
		}
		h6{
			margin-left:720px;
			margin-bottom:-37px;
		}
		body{background-color: white;}
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

<div class="container">
	
	<p style="font-family: 'Balsamiq Sans', cursive;font-size:35px;">Technical Discussion</p>
	
	
<button onclick="goBack()" class="btn btn-info" style="margin-left: 75%;width:10%;margin-top:-4%;background-color:#9E9E9E;border:none;">Go Back</button>	
<a href="create_topic.php" type="button" class="btn btn-info" style="margin-left:87%;border:none;background-color:#30438B;margin-bottom:3px;margin-top: -90px;">Start New Topic</a>
<br>

	<?php while($row = mysqli_fetch_array($sql)){ ?>
	<div class="card" style="padding: 7px;">

		<div class="row" style="margin-left:4px;margin-top:15px;margin-bottom: -35px;"><img src = "img/user.png"/></div>

		
		<?php echo "<h3>".$row['title']."</h3>"; ?>

		
		<div class="over">
			<p><?php echo $row['content'];?></p>
		</div>
<br>
<br>
	<?php echo "<h6>".$row['email'].",</h6>";?>
		<?php echo '<span ><a  style="width:20%;background-color:#30438B;margin-right:80%;text-decoration:none;color:white;padding:8px;border-radius:4px;" href="details.php?id='.$row['id'].'">Details</a></span><br><span style="margin-left:85%;margin-top:-3%;"> '.$row['date'].'</span>';?>
	</div>
<?php } ?>
</div>
</body>
</html>
