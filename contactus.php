<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="contact.css">
	<link rel="stylesheet" type="text/css" href="sty1.css">
</head>
<body class="body">
	<header>
		<div class="main">
			<div class="logo">
				<img src="pic2.jpg">
			</div>
			<div class="navbar">
  <a href="hvac.php">HOME</a>
  <a href="contactus.html">CONTACT US</a>
  <a href="gallery.html">GALLERY</a>
  <a href="aboutus.html" name="abs">ABOUT US</a>
 
  <a href="complain.html">COMPLAIN</a>

  <div class="dropdown">
    <button class="dropbtn">SERVICES 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Air Coditioner</a>
      <a href="#d">Chiller</a>
      <a href="#">Cold Rooms</a>
    </div>
  </div> 

	</header>
	
	<div class="form">
		<h1 class="h">Contact Us</h1>
		<form>
			<input type="text" name="name" placeholder="Name">
			<input type="email" name="email" placeholder="E-Mail">
			<input type="text" name="contact" placeholder="Contact Number">
			<input type="text" name="message" id="msg" placeholder="Message">
	
		<input type="submit" id="button" name="button" value="Let's Talk">
	</form>
	</div>
		
</div>
	<?php
		if(isset($_POST['button']))
		{
			$nm=$_POST['name'];
			$email=$_POST['email'];
			$contact=$_POST['contact'];
			$message=$_POST['message'];
			$conn=mysqli_connect("localhost","root","","registration") or die("connection is not established");

			$q="insert into contactus(name,email,contact,message)values('$nm','$email','$contact','$message');";

			$query=mysqli_query($conn,$q);

		}
		else
		{
			echo "data not inserted";
		}

?>
</body>
</html>