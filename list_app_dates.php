<?php
	include("dbf/connection.php");

	//set timezone to GTM-3 (Arg - Buenos Aires)
	date_default_timezone_set("America/Argentina/Buenos_Aires");

	//creates a MySQL connection
	$con = connection($db_info);

	$sql = "SELET * FROM appointments WHERE date = ".date('Y/m/d')."";

	$result = mysqli_query($con,$sql);

	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_assoc($result) )
		{
			var_dump($row);
			echo "<br />";
		}

	}

	
<<<<<<< HEAD
	$con = connection($db_info);

	$sql = "SELECT name, time, hospital, doctor, specialization";
=======
	//echo date("Y/m/d");
>>>>>>> origin/master
