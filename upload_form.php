<?php
	//MySQL functions
	include("dbf/connection.php");

	//Check if form was submitted
	if(!empty($_POST))
	{
		$con = connection($db_info);

		//mysql insert
		$sql = "INSERT INTO appointments (name,date,time,hospital,doctor,specialization,requirements) 
		VALUES ('".$_POST['a_patient']."','".$_POST['a_appointment']."','".$_POST['a_time'].":00','".$_POST['a_hospital']."','".$_POST['a_doctor']."','".$_POST['a_docspecialization']."','".$_POST['a_reqstudies']."')";

		if(!mysqli_query($con,$sql))
		{
			echo "Error: ". mysqli_error($con)."<br />"; 
		}
		else
		{
			echo "Turno guardado con exito!<br/>";
			header("Location: index.php");
			die();
		}

	}
?>

<form method="post" action="upload_form.php">
	<!--  Pacient  -->
	Patient:  <br />
	<input type="text" name="a_patient"> <br />

	<!--  Appointment Date  -->
	Appointment Date: <br />
	<input type="date" name="a_appointment" min="2015-01-01"> <br />

	<!--  Appointment Time  -->
	Time: <br />
	<input type="time" name="a_time"> <br />

	<!--  Hospital's Name  -->
	Hospital: <br />
	<input type="text" name="a_hospital"> <br />

	<!--  Doctor's Name  -->
	Doctor: <br />
	<input type="text" name="a_doctor"> <br />

	<!--  Specialization  -->
	Specialization: <br />
	<input type="text" name="a_docspecialization"> <br />

	<!--  Required Studies  -->
	Required Studies: <br/>
	<textarea name="a_reqstudies"></textarea> <br />
	

	<input type="submit" value="Send">

		
</form>