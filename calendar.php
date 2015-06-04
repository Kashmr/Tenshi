<?php

function createCalendar($days)
{
	//makes all values unique in array days

	$finalDays = array_unique($days);

	//lower case C stands for current.

	$daysInaMonth = date("t");

	$today = date('d');

	$cMonth = date("n");
	$cYear = date("Y");


	$firstDayMonth = date("D",mktime(0,0,0,$cMonth,1,$cYear));



	$firstDayMonthNumber = date("N",mktime(0,0,0,$cMonth,1,$cYear));


	//creates a month table
	echo "<div class=\"row\">";
	//echo "<div class=\"col-xs-1\" >";
	//echo "</div>";
	echo "<div class=\"col-xs-6\" style=\"margin-left:15px;\" >";
	echo "<table class=\"table table-bordered\" height=\"700px\">";

	echo "<tr>";
	//echo "<th>";
		echo "<td>Lun</td>";
		echo "<td>Mar</td>";
		echo "<td>Mier</td>";
		echo "<td>Jue</td>";
		echo "<td>Vie</td>";
		echo "<td>Sab</td>";
		echo "<td>Dom</td>";
	//echo "</th>";
	echo "</tr>";


	echo "<tr>";

	$j = 1;

	//for($i = 1; $i <= $daysInaMonth; $i++)
	for($i = 1; $i <= 35; $i++)
	{


		if($i < (int)$firstDayMonthNumber)
		{
			//print empty data if index $i hasn't reached the first day of the week position
			echo "<td></td>";
		}
		else
		{
			//check what's the real position of index $i 
			//if it's not greater than the max days in this month, then prints the given index $i minus the position index of the first
			//day of the month minus one, if it started on a wednesday then that position is 3 (scales goes from 1(mon) to 7(sunday))
			//that last *minus one* it's there to prevent the counter from printing day 0. Technically, if there are 31 days, it will print from 0 to 30 without that last substraction.
			if($i - (int)$firstDayMonthNumber < (int)$daysInaMonth)
			{
				//echo "<td>".((int)$i-((int)$firstDayMonthNumber-(int)1))."</td>";
				
				$realDay = (int)$i-((int)$firstDayMonthNumber-(int)1);

				//marks a day if it has an appointment (or going to have one), if It already happened, then just prints the day.

				if(in_array($realDay,$finalDays) && $realDay >= (int)$today )
				{
					echo "<td class=\"marked\">".((int)$i-((int)$firstDayMonthNumber-(int)1))."</td>";
				}
				else
				{
					echo "<td>".((int)$i-((int)$firstDayMonthNumber-(int)1))."</td>";	
				}
			}
			else
			{
				echo "<td></td>";
			}
			
		}

		//ends table row every 7 days
		if($i % 7 == 0)
		{
			echo "</tr><tr>";
		}

	}





	echo "</tr>";
	echo "</table>";
	echo "</div>";

	//echo "<div class=\"col-xs-1\">";
	//echo "</div>";

	echo "<div class=\"col-xs-3\">";
		include("side_date.php");
	echo "</div>";

	echo "</div>";
}

?>

