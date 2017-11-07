<?php
	include "config.php";
        session_start();
        if(!isset($_SESSION['username'])){
               header('location: login.php');
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
  
	  <!-- Nav bar-->
	  <?php
	  include "components/nav_bar.php";
	  ?>
      
	  <!-- Left Menu-->
	  <div class="container">
	      <div class="row">
	          <div class="col-md-3">
	              <div class="list-group">

	                <?php
	                include "components/left_menu.php";
	                ?>

	              </div>
					
	          </div>
	        
	          <div class="col-md-9">
	              <div class="jumbotron">
	                <h1>Hello, <?php echo $_SESSION['username']?>!</h1>
	                <!--Add select box-->

	                <form>
					    <div class="well carousel-search hidden-sm">
					        <div class="btn-group"> <a class="btn btn-default dropdown-toggle btn-select" data-toggle="dropdown" href="#">Select a House <span class="caret"></span></a>
					            <ul class="dropdown-menu">
					            	<?php

						                include "model/DatabaseQuery.php";
						                $arr_house = getListOfHouseByUserID($_SESSION['id']);
						                $len_house = count($arr_house);
						                for($x = 0; $x < $len_house; $x++) {
														    $row_house = $arr_house[$x];
														    ?>
														    <li><a href="#"><?php echo $row_house["id"] . "-" . $row_house["name"]?></a></li>
														    <?php
														    // echo "id: " . $row_house["id"]. " - Name: " . $row_house["name"]. " Owner House " . $row_house["owner_id"]. "<br>";								    
										}		                
					                ?>
					                
					            </ul>
					        </div>
	
					        <div class="btn-group">
					            <button type="button" id="btnGo" class="btn btn-primary">GO</button>
					        </div>
					    </div>
					</form>
 					<script type="text/javascript" src="js/set_selection.js"></script>
					<!---->
	            
	                <p>Pi's Mac address: </p>
	                <?php
	                	$row_mac = "";
	                	for($x = 0; $x < $len_house; $x++) {
										    $row_house = $arr_house[$x];
										    $houseID = $row_house['id'];
										    $arr_mac = getPiMACbyHouseID($houseID);
										    $len_mac = count($arr_mac);
										    for($y = 0; $y < $len_mac; $y++) {
											    $row_mac = $arr_mac[$y];
											    echo "id: " . $row_mac["id"]. " - MAC: " . $row_mac["pi_mac_address"]. "<br>";										    
												}
						}
						$houseId = $_GET['houseId'];
						echo $houseId
	                ?>
	                <p><a href="house/controller.php">House 1</a></p>

	                <h1>Hello, <?php echo $_SESSION['username']?>!</h1>
	                <p>This is Control Panel</p>
	           		<!--auto update sensor data-->
					<script>
					var auto_refresh = setInterval(
					(function () {
					    $("#refresh_sensor_data").load("model/get_sensor_data.php"); 
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
