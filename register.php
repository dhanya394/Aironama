<html>
<head>
	<script>
	function validateForm() {
	  var fname = document.forms["myForm"]["firstname"].value;
	  var lname = document.forms["myForm"]["lastname"].value;
	  var uname = document.forms["myForm"]["username"].value;
	  var pwd = document.forms["myForm"]["password"].value;
	  var cpwd = document.forms["myForm"]["cpassword"].value;
	  var gender = document.forms["myForm"]["gender"].value;
	  var dob = document.forms["myForm"]["dob"].value;
	  var email = document.forms["myForm"]["email"].value;
      var mob = document.forms["myForm"]["mobile"].value;
      var ck_email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
       
	  if (fname == "") {
	    alert("Firstname must be filled out");
	    return false;
	  }
	  if (lname == "") {
	    alert("Lastname must be filled out");
	    return false;
	  }
	   if (uname == "") {
	    alert("Username not valid");
	    return false;
	  }
	   if (pwd == "") {
	    alert("Password must be filled out");
	    return false;
	  }
	  if(pwd.length<8)
	  {
	  	alert("Password should have minimum 8 characters.");
	  }
	  if (cpwd == "") {
	    alert("Password must be filled out");
	    return false;
	  }
	  if(pwd!=cpwd)
	  {
	  	alert("Passwords don't match!");
	  }
	  if (gender == "") {
	    alert("Gender must be filled out");
	    return false;
	  }
	   if (dob == "") {
	    alert("Date of Birth must be filled out");
	    return false;
	  }
	   if (email == "") {
	    alert("Email must be filled out");
	    return false;
	  }
	  if (!ck_email.test(email)) {
	    //errors[errors.length] = "You must enter a valid email address.";
	    alert("You must enter a valid email address.");
	   }
	  if (mob == "")
	   {
	    alert("Mobile number must be filled out");
	    return false;
	  }
	}
	</script>
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
    </style>
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
    <a class="active" href="register.php" style="float:right">Register</a>
    <a href="simplexml.xml" style="float:right">Flights</a>
    <a href="book.php" style="float:right">Book Flight</a>
    <a href="#contact" style="float:right">Contact</a>
    <a href="#about" style="float:right">About</a>
    </div>
    </center>
	<div class="box">
	<h2> Register New User </h2> <br><br>
	<form name="myForm" method="post" onsubmit="return validateForm()" action="save.php" class="inc">
		First Name : <input type="text" name="firstname"><br><br>
		Last Name : <input type="text" name="lastname"><br><br>  
		Username : <input type="text" name="username"><br><br>
		Password : <input type="password" name="password"><br><br>
		Confirm Password : <input type="password" name="cpassword"><br><br>
		Gender : <input type="radio" name="gender" value="male"> Male <input type="radio" name="gender" value="female"> Female <br><br>
		Date of birth : <input type="date" name="dob"><br><br>
		Email id : <input type="text" name="email"><br><br>
		Mobile : <input type="text" name="mobile"><br><br>
		<input class="button" type="submit" value="submit" style="font-size:15px; font-weight:bold">
	</form>
    </div><br><br>
</body>
</html>