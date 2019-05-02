<?php
extract($_POST);
/*		$mysqli = new mysqli('localhost', 'root','','airlinedb');

		if($mysqli->connect_errno > 0){
		die('Unable to connect to database [' . $db->connect_error . ']');
		}
		else
			echo "dhannu";*/
		$con = mysqli_connect('localhost', 'root','');
		if($con)
			echo "connected";
		$db = mysqli_select_db($con,'airlinedb');
		if($db)
			echo "ready";
if(isset($_POST["signin"]))
{  
  
    $user=mysqli_real_escape_string($_POST['username']);  
    $pass=mysqli_real_escape_string($_POST['password']);

    $query=mysqli_query($con,"SELECT * FROM registerdb WHERE username='".$user."'");  
    if(($num = mysqli_num_rows($query))>0)  
     
    {    
    	echo "hhihi";
    #$dbusername=$row['username'];  
    //$dbpassword=$row['password'];  
    
    /*if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
    echo "hello";
    /* Redirect browser */  
    //header("location:book.html");  
   // }  
    } 
    else {  
    echo "Invalid username or password!";  
    }  
  
/*} else {  
    echo "All fields are required!";  */
}
?>
<!--<!DOCTYPE html>
<html>
<head>
	<title>mkdfd</title>
</head>
<body>
	<p>lkffnvdjfvrjgbuerier</p>
</body>
</html>-->