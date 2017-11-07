<?php
	#TODO: Need to get MAC
	$mac = "B8-27-EB-DC-C0-65";
	$filename = "../house/{$mac}";
	#echo $filename;
	$myfile = fopen($filename, "r") or die("Unable to open file!");
	while(!feof($myfile)) {
  		echo fgets($myfile) . "<br>";
	}
	fclose($myfile);

	#echo "Light(lux): $light_data <br />";
	#echo "Temperature(C): $temp_data <br />";
	#echo "Humidity(%): $humi_data";
?>