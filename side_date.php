<?php
	
//Shows an appoitment table next to the calendar in index.php

$db_info = [ "servername" => "localhost",
               "username" => "root",
               "password" => "",
               "database" => "membase" ];

	//set timezone to GTM-3 (Arg - Buenos Aires)
	date_default_timezone_set("America/Argentina/Buenos_Aires");

	//creates a MySQL connection
	$con = connection($db_info);

	//Dates were stored as string with dashes
	//so we format the current date string with dashes for compatibily
	$date = date('Y-m-d');

	$currentDay = date('d');

	$month = date('Y-m-');

	$daysInMonth = (int)date("t");

	$daysArray = array();


	//$sql = "SELECT * FROM appointments WHERE date = '".$date."'";


	echo "<table class=\"table\">";
	echo "<tr>";
	echo"<td>Fecha</td>";
	echo"<td>Hora</td>";
	echo"<td>Nombre</td>";
	echo"<td>Doctor</td>";
	echo"<td>Esp</td>";
	echo"<td>Hospital</td>";
	echo"<td>Requerimientos</td>";
	echo"</tr>";

	for($i = (int)$currentDay;$i <= $daysInMonth;$i++)
	{	
		
		//Selects all records with the current month
		if($i < 10)
		{
			$sql = "SELECT * FROM appointments WHERE date LIKE '".$month."0".$i."'";
		}
		else
		{
			$sql = "SELECT * FROM appointments WHERE date LIKE '".$month.$i."'";
		}

		$result = mysqli_query($con,$sql);

		if(mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_assoc($result) )
			{
				$dateExp = explode("-",$row['date']);

				echo"<tr>";

				echo "<td>".$dateExp[2]."/".$dateExp[1]."</td>";
				/*echo "<li>".$row['time']."</li>";
				echo "<li>".$row['name']."</li>";
				echo "<li>".$row['specialization']."</li>";
				echo "<li>".$row['doctor']."</li>";
				echo "<li>".$row['hospital']."</li>";
				echo "<li>".$row['requirements']."</li>";*/

				echo "<td>".$row['time']."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['doctor']."</td>";
				echo "<td>".$row['specialization']."</td>";
				
				echo "<td>".$row['hospital']."</td>";
				echo "<td>".$row['requirements']."</td>";
				echo "</tr>";	
			}

		}
	}

	echo "</table>";
