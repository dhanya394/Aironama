<?php
if(isset($_COOKIE["user"]) and isset($_COOKIE["pass"]))
{
    $user=$_COOKIE["user"];
    $pass=$_COOKIE["pass"];
}
?>
<!DOCTYPE html> 
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    h1
    {
    	border:10px solid navy;
        color:purple;
    }
    ul 
    {
    text-align: justify;
    list-style-position: inside;
    }
    * {box-sizing: border-box}
    body {font-family: Verdana, sans-serif; margin:0 auto;
    	background-image: url('img1.jpg');
    	background-size: cover;
    	position: center;
    }
    
</style>
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Luckiest+Guy|Righteous|Roboto+Mono|Secular+One" rel="stylesheet">
    <link rel="stylesheet" href="style1.css"/>
	<title> Aironama - Airline Reservation System </title>
	<h1 align="center" style="font-family: 'Righteous' ;font-weight: bold;"> Aironama </h1>
</head>
<body>
    <div class="topnav" >
    <a href="home.php" style="float:right">Home</a>
    <a class="active" href="login.php" style="float:right">Login</a>
    <a href="register.php" style="float:right">Register</a>
    <a href="simplexml.xml" style="float:right">Flights</a>
    <a href="book.php" style="float:right">Book Flight</a>
    <a href="#contact" style="float:right">Contact</a>
    <a href="#about" style="float:right">About</a>
    </div>
	<h2>Aironama - Airline Reservation System</h2><br>
	<p id="para"> Air travel made easier and cheaper. Airline Reservation System is used to book flights , Domestic and International and at very cheap prices.Moreover, seasonal discounts on selected Domestic and International flights is just a cherry on the top!  <br><br>
	</p>
	<center>
	<div class='ben'>
	<h3>Benefits:</h3></center>
	<ul style="font-family: 'Roboto Mono';color:rgb(0, 128, 128);font-size:15px">
		<center>
		<li>Exclusive Discounts for Students and Senior Citizens</li>
		<li>Lower Cancellation Fees</li>
		<li>Special Benefits on Group Booking</li>
	</ul></center>
    </div>
	<div class="box">
	<center>
	<h4>Login or signup</h4>
	<form method="POST" action="save2.php">
		Username : <input type="text" name="username"><br><br>
		Password : <input type="password" name="password"><br><br>
        <input type="checkbox" name="remember">Remember Me<br><br>
		<!--<button class="button" type="button" value="Sign in" name="signin" onclick="location.href='save2.php'">Sign in</button><br><br>-->
        <input class="button" type="submit" value="Sign in" name="signin" style="font-size:15px; font-weight:bold"><br><br>
		<a href="register.html" target="_blank"> Sign Up New User </a>
	</form>
	</center>
    </div><br><br>
</body>
</html>