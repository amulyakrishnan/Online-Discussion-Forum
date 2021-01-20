<?php
session_start();
include_once("connect.php");
// include_once("home.php");
$id = $_GET['id'];
$sql  = mysqli_query($con,"SELECT * FROM content where id='$id'");
$row = mysqli_fetch_array($sql);
?>
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
	<style type="text/css">
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
		.reply{background-color: #D4D6D7;padding: 3%; border-radius: 5px; margin:10px;}
		.reply input[type="text"]{border: none; border-bottom: 3px solid red;background-color: #D4D6D7;}
		.col-sm-1 p{background-color: #4BB8E7;color: white;font-size: 35px;text-align: center;border-radius: 50px;}
		.first{padding: 2%;margin:10px;background-color: #D4D6D7;border-radius: 5px;}
		
.qty1,
.qty2 {
    border:none;
    width:20px;
    background: transparent;
}
	textarea:focus, input:focus{
    outline: none;
    

}	
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	
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
    <button onclick="goBack()" class="btn btn-info" style="margin-left: 2%;width:5%;margin-top:2%;background-color:#9E9E9E;border:none;">Go Back</button>
  <br>
  
 
<div class="container">
	<div class="card" style="padding: 2%;border:1px solid black">
		<h3 style="font-weight: 600;margin-top:-5px;"><?php echo $row['title']; ?></h3>
		<p style="font-size: 18px;margin-left:13px;"> <?php echo $row['content']; ?></p>
		
		<?php
			if($row['email'] == "admin@gmail.com"){
				echo '<a href="delete.php?id='.$id.'">Eid</a>';
			}

		?>

        <!-- code for like and dislike -->
		<div class="container"> 
    <a class="like" style="color:#46589A"><i class="fa fa-thumbs-o-up"></i>  
        Like <input class="qty1" name="qty1" readonly="readonly" type="text" value="0" />
    </a>
    <a class="dislike" style="color:#46589A"><i class="fa fa-thumbs-o-down"></i> 
        Dislike <input class="qty2"  name="qty2" readonly="readonly" type="text" value="0" />
    </a>
</div>

<span class="ml-auto"><?php
		$time_now=mktime(date('h')+5,date('i')+30,date('s'));
echo(date("F d, Y h:i:s",$time_now));

?></span>
	</div>
</div>
<br>

 <div class="container">
   <form method="POST" id="comment_form">
    <div class="form-group">
     <input type="text" style = "border:1px solid black;font-size: 18px;padding:2%;" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
    </div>
    <div class="form-group">
     <textarea style = "border:1px solid black;font-size:20px;color:black;"name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden"style = "border:1px solid black;" name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" style="background-color:#46589A;border:none;"value="Submit" />
    </div>
   </form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
  </div>
</body>
<script>
$(function () {
     $(".like").click(function () {
         var input = $(this).find('.qty1');
         input.val(parseInt(input.val())+ 1);
     });

     $(".dislike").click(function () {
         var input = $(this).find('.qty2');
         input.val(input.val() - 1);
     });
});
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>

</html>
 <?php

 if($_SERVER['REQUEST_METHOD']=='POST'){
	$message = mysqli_real_escape_string($con,$_POST['message']);
 	$user = mysqli_real_escape_string($con,$_POST['user']);
 	$time = date("F d, Y");


 	$content_id = $id;
 	$query = mysqli_query($con,"INSERT INTO comments(name,message,time,content_id)VALUES('$user','$message','$time','$content_id')");
 	if($query){
		echo "<p style='color:#4BB8E7'>Posted....<p>";
		
 	}else{
 		die("Error : Something Wrong !!!!");
	}
}
?> 