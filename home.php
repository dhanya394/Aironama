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
    .mySlides {display: none; width:100%; height:50%;}
    img {vertical-align: middle;}

    /* Slideshow container */
    .slideshow-container {
      max-width: 100%;
      width: 100000px;
      position: relative;
      margin: auto;
    }

    /* Next & previous buttons */
    .prev, .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      padding: 16px;
      margin-top: -22px;
      color: white;
      font-weight: bold;
      font-size: 18px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
      user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover, .next:hover {
      background-color: rgba(0,0,0,0.8);
    }

    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    .dot {
      cursor: pointer;
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active, .dot:hover {
      background-color: #717171;
    }

    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 1.5s;
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }

    @keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .prev, .next,.text {font-size: 11px}
    }
    
</style>
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Luckiest+Guy|Righteous|Roboto+Mono|Secular+One" rel="stylesheet">
    <link rel="stylesheet" href="style1.css"/>
	<title> Aironama - Airline Reservation System </title>
	<h1 align="center" style="font-family: 'Righteous' ;font-weight: bold;"> Aironama </h1>
</head>
<body>
  <center>
  <div class="topnav" >
    <a class="active" href="home.php" style="float:right">Home</a>
    <a href="login.php" style="float:right">Login</a>
    <a href="register.php" style="float:right">Register</a>
    <a href="simplexml.xml" style="float:right">Flights</a>
    <a href="book.php" style="float:right"> Book Flight</a>
    <a href="#contact" style="float:right">Contact</a>
    <a href="#about" style="float:right">About</a>
    </div>
    </center>
	<h2>Aironama - Airline Reservation System</h2>
	<div class="slideshow-container">
	<center>
	<div class="mySlides fade">
	  <div class="numbertext">1 / 3</div>
	  <img src="slideshow1.jpg">
	  <div class="text"></div>
	</div>

	<div class="mySlides fade">
	  <div class="numbertext">2 / 3</div>
	  <img src="slideshow2.jpg" >
	  <div class="text"></div>
	</div>

	<div class="mySlides fade">
	  <div class="numbertext">3 / 3</div>
	  <img src="slideshow3.jpg">
	  <div class="text"></div>
	</div>
    </center>

	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	<a class="next" onclick="plusSlides(1)">&#10095;</a>

	</div>
	<br>

	<div style="text-align:center">
	  <span class="dot" onclick="currentSlide(1)"></span> 
	  <span class="dot" onclick="currentSlide(2)"></span> 
	  <span class="dot" onclick="currentSlide(3)"></span> 
	</div>
	<script>
	var slideIndex = 1;
	var timer = null;
	showSlides(slideIndex);

	function plusSlides(n) {
		 clearTimeout(timer);
	  showSlides(slideIndex += n);
	}

	function currentSlide(n) {
		 clearTimeout(timer);
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("dot");
	  if (n==undefined){n=++slideIndex}
	  if (n > slides.length) {slideIndex = 1}    
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
	      slides[i].style.display = "none";  
	  }
	  for (i = 0; i < dots.length; i++) {
	      dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += " active";
	  timer = setTimeout(showSlides, 3000);
	}
	</script>
	<p id="para" style="font-size:20px"> <br><br>Air travel made easier and cheaper. Airline Reservation System is used to book flights , Domestic and International and at very cheap prices.Moreover, seasonal discounts on selected Domestic and International flights is just a cherry on the top!  <br><br>
	</p>
	<center>
	<div class='ben' style="font-size:20px">
	<h3>Benefits:</h3></center>
	<ul style="font-family: 'Roboto Mono';color:rgb(0, 128, 128);font-size:20px">
		<center>
		<li>Exclusive Discounts for Students and Senior Citizens</li>
		<li>Lower Cancellation Fees</li>
		<li>Special Benefits on Group Booking</li>
	</ul></center>
    </div>
    <center>
    <input class="button" type="submit" onclick="location.href='login.php';" value="Login" style="font-size:15px; font-weight:bold" /><br><br>
    <input class="button" type="submit" onclick="location.href='register.php';" value="Sign up" style="font-size:15px; font-weight:bold" />
    </center>
</body>
</html>