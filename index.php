<?php 
	//include other php files here
	include("list_app_dates.php");
?>
<!DOCTYPE html>
<html>
<?php 
	include("head.php");
?>
<body>
<!-- <div class="container"> -->
	<?php 
		include("navbar.php");
		//include("body.php");

		createCalendar($xdaysArray);

		include("jslib.php"); 
	?>
<!-- </div> -->
</body>
</html>