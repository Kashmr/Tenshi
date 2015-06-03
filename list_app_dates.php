<link href="css/calendarstyle.css" type="text/css" rel="stylesheet">
<?php
	


	include("dbf/connection.php");
	include("calendar.php");

	//set timezone to GTM-3 (Arg - Buenos Aires)
	date_default_timezone_set("America/Argentina/Buenos_Aires");

	//creates a MySQL connection
	$con = connection($db_info);

	//Dates were stored as string with dashes
	//so we format the current date string with dashes for compatibily
	$date = date('Y-m-d');

	$month = date('-m-');

	$daysArray = array();


	//$sql = "SELECT * FROM appointments WHERE date = '".$date."'";
	
	//Selects all records with the current month
	$sql = "SELECT date FROM appointments WHERE date LIKE '%".$month."%'";

	$result = mysqli_query($con,$sql);

	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_assoc($result) )
		{

			$dateExplode = explode("-",$row['date']);

			//stores appointment date on array days
			$daysArray[] = (int)$dateExplode[2];
		}

	}

 	// Prints a Calendar and pass an array with all the days that need be marked
 	createCalendar($daysArray);

 	


	