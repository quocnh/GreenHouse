<?php
include "../config.php";

function openConnectDB(){
	$conSQL = new mysqli("localhost", "root", "dung4485", "greenhouse");									
	// Check connection
	if ($conSQL->connect_error) {
	    die("Connection failed: " . $conSQL->connect_error);
	}
	return $conSQL;
}

function closeConnectDB($conSQL){
	$conSQL->close();
}

// Get list of house by UserID
function getListOfHouseByUserID($user_id){
	// Create connection
	$conn = openConnectDB();
	
	$sql = "SELECT * FROM house WHERE owner_id=$user_id";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        $result_array[] = $row;
	    }
	} else {
	    echo "0 results" . "<br>";
	}
	
	closeConnectDB($conn);
	return $result_array;
}

// Get Pi Mac by HouseID
function getPiMACbyHouseID($house_id){
	// Create connection
	$conn = openConnectDB();
	
	$sql = "SELECT pi_mac_address FROM house WHERE house.id=$house_id";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        $result_array[] = $row;
	    }
	} else {
	    echo "0 results" . "<br>";
	}
	
	closeConnectDB($conn);
	return $result_array;
}

?>