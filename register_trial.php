<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Registration
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Member Registration</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>

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
     <!--  <button type="submit" class="btn btn-info" style="background-color: #46589A">Create Account</button> -->
   
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger" data-dismiss="modal" style="background-color: #46589A;border-color:none;">Create Account</button>
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
