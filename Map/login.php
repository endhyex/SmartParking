<?php
include('server.php');

/*if (isset($_SESSION['username'])) {
  header("location: login.php");
}else {*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style>#backgroundImage{z-index: 1;}

#backgroundImage:before {
   content: "";
   position: absolute;
   z-index: -1;
   top: 0;
   bottom: 0;
   left: 0;
   right: 0;
   background-image: url(Capture.png);
    background-repeat: no-repeat;
    background-size: 100%;
    opacity: 0.2;
    filter:alpha(opacity=20);
    height:100%;
    width:100%;
 }

.main{
   height:125px;
   width:0px;
   margin:auto;
   /*background-color:green;*/
   z-index:-1;
   opacity: 1;
   filter:alpha(opacity=100);
}</style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width = device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/global.css">
  
<title>Smart Parking - Login</title>
</head>
<body background=Capture.png">
<div id="backgroundImage">
    <div class="main">
    </div>
</div>
<div class="container-fluid bg">
  <div class="row">
    <div class="col-md-4 col-sm-4 col-xs-12"></div>
    <div class="col-md-4 col-sm-4 col-xs-12">
      <form class="form-container" method="post" action="login.php">
        <h1 style="font-size:35px; font-family:georgia; font-weight: bold;"><center>Smart Parking - Login</center></h1>
        <?php include('error.php');?>

       <div class="form-group">
         <label>Username</label>
         <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $username; ?>">
       </div>

       <div class="form-group">
         <label>Password</label>
         <input type="password" class="form-control" name="password" placeholder="Password">
       </div>

       <div class="checkbox">
         <label>
           <input type="checkbox"> Remember me
         </label>
       </div>

       <button type="submit" class="btn btn-info btn-block" name="login">Login</button>
       <h5>Not a member? <a href="registration.php">Register</a></h5>
      </form>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12"></div>
  </div>
</div>
</body>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</html>
<?php 
?>