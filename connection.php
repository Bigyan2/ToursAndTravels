<?php
	$db_host = "localhost";
	$db_name = "tours_travels";
	$db_username = "root";
	$db_password = "Bigy@n#12345";

	$conn = mysqli_connect($db_host,$db_username,$db_password, $db_name);

	if (!$conn) {
		echo "Databse connection failed!!";
	} 



  ?>