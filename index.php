<?php 
session_start();
include('header.php');


include_once("connect.php");


if($_SERVER['REQUEST_METHOD']=='POST'){
	
$title = mysqli_real_escape_string($con,$_POST['title']);
$description= mysqli_real_escape_string($con,$_POST['description']);
$start_date = mysqli_real_escape_string($con,$_POST['start_date']);
$end_date = mysqli_real_escape_string($con,$_POST['end_date']);
 	$query = mysqli_query($con,"INSERT INTO events(title,description,start_date,end_date)VALUES('$title','$description','$start_date','$end_date')");
 	if($query){
		echo "<h3 style='color:#4BB8E7;'>Event Posted Successfully<h3>";
		
 	}else{
 		die("Error : Something Wrong !!!!");
	}
}
?>

<title>Event Calendar</title>
<link rel="stylesheet" href="css/calendar.css"> 
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<style>
	.container {
  padding: 2rem 0rem;

}

h4 {
  margin: 2rem 0rem;
}

.panel {
  border-radius: 4px;
  padding: 1rem;
  margin-top: 0.2rem;
  background-color: #F5F5F5;
  color: #323B40;
}
.panel.panel-blue {
  background-color: #E0F5FF;
  color: #00A5FA;
}
.panel.panel-big-height {
  min-height: 150px;
}

.item {
  border-radius: 4px;
  padding: 0.5rem;
  margin: 0.2rem;
}
.item.item-blue {
  background-color: #B9E5FE;
  color: #00A5FA;
}
.item.item-green {
  background-color: #B7E0DC;
  color: #019888;
}
.item.item-lime {
  background-color: #C7E8C8;
  color: #42B045;
}
.item.item-yellow {
  background-color: #FFEEBA;
  color: #FF9901;
}
.item.item-pink {
  background-color: #FABAD0;
  color: #EF075F;
}
.item.item-red {
  background-color: #FEC9C6;
  color: #FD3D08;
}
.item.item-big-width {
  min-width: 380px;
}
	</style>
<div class="container">	
	<h2>Event Calendar</h2>	
	<div class="page-header">
		<div class="pull-right form-inline">
			<div class="btn-group">
				<button class="btn btn-primary" data-calendar-nav="prev"><< Prev</button>
				<button class="btn btn-default" data-calendar-nav="today">Today</button>
				<button class="btn btn-primary" data-calendar-nav="next">Next >></button>
			</div>
			<div class="btn-group">
				<button class="btn btn-warning" data-calendar-view="year">Year</button>
				<button class="btn btn-warning active" data-calendar-view="month">Month</button>
				<button class="btn btn-warning" data-calendar-view="week">Week</button>
				<!-- <button class="btn btn-warning" data-calendar-view="day">Day</button> -->
			</div>
		</div>
		<h3></h3>
		<!-- <small>To see example with events navigate to January 2021</small> -->
	</div>
	<div class="row" >
		<div class="col-md-9"  >
			<div id="showEventCalendar"></div>
		</div>
		<div class="container" >
  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#form">
    Add Event
  </button>  
</div>
	</div>	
	<!-- <div style="margin:50px 0px 0px 0px;">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="http://www.phpzag.com/create-event-calendar-with-jquery-php-and-mysql/">Back to Tutorial</a>		
	</div> -->
</div>


<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0" style="background-color: #46589A;color: white">
        <h5 class="modal-title" id="exampleModalLabel">Event Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST">
        <div class="modal-body">   
          <div class="form-group">
            <label for="event_name">Event Name</label>
            <input name="title" type="text" class="form-control" id="event_name" aria-describedby="emailHelp" placeholder="Enter Event Name">
           
          </div>
          <div class="form-group">
            <label for="description">Event Description</label>
            <textarea name="description" col="50" row="30"  type="text" class="form-control" id="des" placeholder="About Event"></textarea> 
          </div>
          <div class="form-group">
            <label for="date">Start Date</label>
            <input name="start_date" type="date" class="form-control" id="start" placeholder="Start Date">
          </div>
           <div class="form-group">
            <label for="date">End Date</label>
            <input name="end_date" type="date" class="form-control" id="end" placeholder="End Date">
          </div>
          
        </div>
        <div  class="modal-footer border-top-0 d-flex justify-content-center">
          <button style="background-color: #46589A;color: white" type="submit" class="btn ">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script type="text/javascript" src="js/calendar.js"></script>
<script type="text/javascript" src="js/events.js"></script>

