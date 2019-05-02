<?php
session_start(); 
?>
<html>
<head>
	<style>
    h1
    {
    	border:10px solid navy;
        color:purple;
    }
    body {font-family: Verdana, sans-serif; margin:0 auto;
    	background-image: url('img1.jpg');
    	background-size: cover;
    	position: center;
    }
    .button {
      background-color:#199BB0;
      border: none;
      color: white;
      padding: 5px 22px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      cursor: pointer;
      font-size:20px;
    }
    </style>
    <script>
    function display() {
      DispWin = window.open('','NewWin', 'toolbar=no,status=no,width=300,height=200')
      message = "<b>NAME: </b>" + document.myForm.firstname.value;
      message += "<br><b>GENDER: </b>" + document.myForm.gender.value;
      message += "<br><b>DATE OF JOURNEY: </b>" + document.myForm.doj.value;
      message += "<br><b>SOURCE: </b>" + document.myForm.source.value;
      message += "<br><b>DESTINATION: </b>" + document.myForm.destination.value;
      DispWin.document.write(message);
    }
    </script>
	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Luckiest+Guy|Righteous|Roboto+Mono|Secular+One" rel="stylesheet">
    <link rel="stylesheet" href="style2.css"/>
	<title> Aironama - Airline Reservation System </title>
	<h1 align="center" style="font-family: 'Righteous' ;font-weight: bold;"> Aironama </h1><br>
</head>
<body background="img1.jpg">
	<center>
  <div class="topnav" >
    <a href="home.php" style="float:right">Home</a>
    <a href="login.php" style="float:right">Login</a>
    <a href="register.php" style="float:right">Register</a>
    <a href="simplexml.xml" style="float:right">Flights</a>
    <a class="active" href="book.php" style="float:right">Book Flight</a>
    <a href="#contact" style="float:right">Contact</a>
    <a href="#about" style="float:right">About</a>
    </div>
    </center>
    <input class="button" type="logout" onclick="location.href='logout.php';" value="Log out" style="font-size:15px; font-weight:bold; float:right" />
	<div class="box">
	<h2> Book Ticket </h2> <br><br>
	<form name="myForm" action="save1.php" onsubmit="display()" method="post" class="inc">
		First Name : <input type="text" name="firstname"><br><br>
		Last Name : <input type="text" name="lastname"><br><br>  
		Username : <input type="text" name="username"><br><br>
		Gender : <input type="radio" name="gender" value="male"> Male <input type="radio" name="gender" value="female"> Female <br><br>
		Date of journey : <input type="date" name="doj"><br><br>
		Source : <select name="source">
		  <option value="delhi">Delhi</option>
		  <option value="kolkata">Kolkata</option>
		  <option value="mumbai">Mumbai</option>
		  <option value="chennai">Chennai</option>
		</select><br><br>
		Destination : <select name="destination">
		  <option value="delhi">Delhi</option>
		  <option value="kolkata">Kolkata</option>
		  <option value="mumbai">Mumbai</option>
		  <option value="chennai">Chennai</option>
		</select><br><br>
		Email id : <input type="text" name="email"><br><br>
		Mobile : <input type="text" name="mobile"><br><br>
		<input class="button" type="submit" value="submit" style="font-size:15px; font-weight:bold">
	</form>
    </div><br><br>
</body>
</html>