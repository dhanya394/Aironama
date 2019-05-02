<?php 
		extract($_POST);
		$mysqli = new mysqli('localhost', 'root','','airlinedb');

		if($mysqli->connect_errno > 0){
		die('Unable to connect to database [' . $db->connect_error . ']');
		}
		
		$query = "INSERT INTO bookdb VALUES 
('$firstname','$lastname', '$username','$gender','$doj', '$source', '$destination','$email', '$mobile')";
		$insert_row = $mysqli->query($query);
		if($insert_row)
		{
		  echo "<script type='text/javascript'>";
		  echo "alert('Flight Booked Succesfully!');";
		  echo "</script>"; 
		  //echo "Connected Succesfully";
		  header("location:home.php");
		}
		else{
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
		}
?>