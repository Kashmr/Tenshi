<link href="css/calendarstyle.css" type="text/css" rel="stylesheet">
<?php
	


	include("dbf/connection.php");
	include("calendar.php");

	//set timezone to GTM-3 (Arg - Buenos Aires)
	date_default_timezone_set("America/Argentina/Buenos_Aires");

	//creates a MySQL connection
	$xcon = connection($db_info);

	//Dates were stored as string with dashes
	//so we format the current date string with dashes for compatibily
	$xdate = date('Y-m-d');

	$xmonth = date('Y-m-');

	$xdaysArray = array();


	//$sql = "SELECT * FROM appointments WHERE date = '".$date."'";
	
	//Selects all records with the current month and year
	$xsql = "SELECT date FROM appointments WHERE date LIKE '".$xmonth."%'";

	$xresult = mysqli_query($xcon,$xsql);

	if(mysqli_num_rows($xresult) > 0)
	{
		while($xrow = mysqli_fetch_assoc($xresult) )
		{

			$dateExplode = explode("-",$xrow['date']);

			//stores appointment date on array days
			$xdaysArray[] = (int)$dateExplode[2];
		}

	}

 	// Prints a Calendar and pass an array with all the days that need be marked
 	

 	


	