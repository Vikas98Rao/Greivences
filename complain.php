<!DOCTYPE html>
<html lang="en">
<head>
	<title>COMPLAIN</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
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
		<h1 class="h">COMPLAIN ABOUT DEVICE</h1>
		<form>
			<input type="text" name="dname" placeholder="Device Name">
			<input type="text" name="mname" placeholder="Model name">
			<input type="text" name="time" placeholder="Used time">
			<input type="text" name="message" id="msg" placeholder="Problem">
			<input type="text" name="Address" id="ad" placeholder="Address">
			<input type="text" name="mobile" id="mob" placeholder="Mobile No.">
	
		<input type="submit" id="button" name="button" value="COMPLAIN">
	</form>
	</div>
		
</div>
</body>
	<?php
		if(isset($_POST['button']))
		{
			$dname=$_POST['dname'];
			$mname=$_POST['mname'];
			$time=$_POST['time'];
			$message=$_POST['message'];
			$ad=$_POST['Address'];
			$mob=$_POST['mobile'];
			$conn=mysqli_connect("localhost","root","","registration1") or die("connection is not established");

			$q="insert into contact(devicename,modelname,time,message,address,mobile)values('$dname','$mname','$time','$message','$ad','$mob');";

			$query=mysqli_query($conn,$q);

		
		}

	?>

</html>