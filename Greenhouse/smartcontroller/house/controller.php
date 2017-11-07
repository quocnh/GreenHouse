<?php
	include "config.php";
	session_start();
  if(!isset($_SESSION['username'])){
		header('location: ../login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Green-House Management System</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" >
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
  </head>
  
  
  
  <body>
  
	  <!-- Nav Bar-->
	  <?php
	  include "../components/nav_bar.php";
	  ?>
      
      
	  <!-- Left Menu-->
	  <div class="container">
	      <div class="row">
	          <div class="col-md-3">
	              <div class="list-group">
	               
	               <?php
	               include "../components/left_menu.php";
	               ?>
	                
	              </div>
					
	          </div>
	        
	          <div class="col-md-9">
	              <div class="jumbotron">
	                <h1>Hello, <?php echo $_SESSION['username']?>!</h1>
	                <p>This is Control Panel</p>
	           		<!--auto update sensor data-->
					<script>
					var auto_refresh = setInterval(
					(function () {
					    $("#refresh_sensor_data").load("../model/get_sensor_data.php"); 
					    //Load the content into the div
					}), 3000);
					</script>
					<div id="refresh_sensor_data"></div>

	                <p><a class="btn btn-primary btn-lg" href="../index.php" role="button">Back</a></p>
	              </div> 
	          </div>
	      </div> 
	  </div> 
  	
  </body>
</html>