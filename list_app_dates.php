<?php
	include("dbf/connection.php");

	//set timezone to GTM-3 (Arg - Buenos Aires)
	date_default_timezone_set("America/Argentina/Buenos_Aires");

	//creates a MySQL connection
	$con = connection($db_info);

	//Dates were stored as string with dashes
	//so we format the current date string with dashes for compatibily
	$date = date('Y-m-d');

	$month = date('-m-');

	echo $date."<br />";

	//$sql = "SELECT * FROM appointments WHERE date = '".$date."'";
	
	//Selects all records with the current month
	$sql = "SELECT * FROM appointments WHERE date LIKE '%".$month."%'";

	$result = mysqli_query($con,$sql);

	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_assoc($result) )
		{
			var_dump($row);
			echo "<br />";
		}

	}

	

