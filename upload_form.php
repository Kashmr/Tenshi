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
<div class="row">
<div class="col-xs-3">
</div>

<div class="col-xs-6">
<form class="form" method="post" action="upload_form.php" role="form">
	<!--  Pacient  -->
	<div class="form-group">
		<label>Paciente:</label> <br />
		<input type="text" name="a_patient" size="35">
	</div>

	<!--  Appointment Date  -->
	<div class="form-group">
		<label>Dia del turno: </label><br/>
		<input type="date" name="a_appointment" min="2015-01-01" size="35"> <br />
	</div>


	<!--  Appointment Time  -->
	<div class="form-group">
		<label>Hora del turno: </label> <br />
		<input type="time" name="a_time" size="35"> <br />
	</div>

	<!--  Hospital's Name  -->
	<div class="form-group">
		<label>Hospital: </label><br/>
		<input type="text" name="a_hospital" size="35"> <br />
	</div>

	<!--  Doctor's Name  -->
	<div class="form-group">
		<label>Doctor: </label><br/>
		<input type="text" name="a_doctor" size="35"> <br />
	</div>

	<!--  Specialization  -->
	<div class="form-group">
		<label>Especializacion: </label><br/>
		<input type="text" name="a_docspecialization" size="35"> <br />
	</div>

	<!--  Required Studies  -->
	<div class="form-group">
		<label>Estudios requeridos: </label><br/>
		<textarea name="a_reqstudies" rows="5" cols="37"></textarea> <br />
	</div>

	<input type="submit" value="Agregar nuevo turno">

		
</form>
</div>

<div class="col-xs-3">
</div>

</div>

