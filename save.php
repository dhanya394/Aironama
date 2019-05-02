<?php 
		extract($_POST);
		$mysqli = new mysqli('localhost', 'root','','airlinedb');

		if($mysqli->connect_errno > 0)
		{
		die('Unable to connect to database [' . $db->connect_error . ']');
		}
		
		$query = "INSERT INTO registerdb VALUES 
('$firstname','$lastname', '$username', '$password', '$cpassword','$gender','$dob','$email', '$mobile')";
		$insert_row = $mysqli->query($query);
		if($insert_row)
		{
		  echo "<script type='text/javascript'>";
		  echo "alert('Registered Succesfully!');";
		  echo "</script>"; 
		  //echo "Connected Succesfully";
		  header("location:login.php");
		}
		else{
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
		}
?>