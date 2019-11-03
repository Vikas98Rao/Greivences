<!DOCTYPE>
<html lang="en">
	<head>
		<title>Register</title>
		
	</head>
	<body>
		<form method="POST" action="">
		Enter your email:<input type="text" name="email" placeholder="xyz@gmail.com"><br><br>
		Enter username:<input type="text" name="username" placeholder="username"><br><br>
		
		Enter password:<input type="password" name="password" placeholder="password"><br><br>
		<input type="submit" name="submit" value="LOGIN">
	
	
	</body>
	<?php
	if(isset($_POST['submit']))
	{
		
	$user=$_POST['username'];
	$pass=$_POST['password'];
	
	$conn=mysqli_connect("localhost","root","","registration")or die("Connection is not established");
	$q="insert into register1(username,password)values('$user','$pass');";
	
	$query=mysqli_query($conn,$q);
	}
	?>
	
	
	
</html>