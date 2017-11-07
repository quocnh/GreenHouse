<?php
	$mac = $_POST['mac'];
	#TO DO: Check this mac exist in database or not

	$myfile = fopen($mac, "w") or die("Unable to open file!");
	fwrite($myfile, "MAC: ");
	fwrite($myfile, $mac);
	fwrite($myfile, "\n");
	fwrite($myfile, "Light (lux): ");
	fwrite($myfile, $_POST['light']);
	fwrite($myfile, "\n");
	fwrite($myfile, "Temperature (C): ");
	fwrite($myfile, $_POST['temp']);
	fwrite($myfile, "\n");
	fwrite($myfile, "Humidity (%): ");
	fwrite($myfile, $_POST['humidity']);
	fclose($myfile);
?>