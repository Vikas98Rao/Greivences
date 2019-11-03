<!DOCTYPE>
<html lang="en">
	<head>
		<title>Login</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
<div class="main">
		<form method="POST" action="">

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>

    <input type="submit" name="submit" class="main1" value="Login">
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <a href="http://localhost/php/19-6-2018/register.php" target="_blank" align="right" title="open table file">Sign up</a>
  
  </div>
</form>

</div>
	<?php
		if(isset($_POST['submit']))
		{
			$user=$_POST['user'];
			$pass=$_POST['pass'];
			
			$conn=mysqli_connect("localhost","root","","registration")or die("Connection is not established");
			$q="Select username,password from register1 where username='$user'and password='$pass';";
			$query=mysqli_query($conn,$q);
		while($row=mysqli_fetch_array($query))
		{
			if($row['username']==$user && $row['password']==$pass)
			{
				session_start();
				$_SESSION['user']=$user;
				header("location:hvac.php");	
			}
			else
			{
				echo "username and password does not exist";
			}
		}

	}

		
	?>
	
