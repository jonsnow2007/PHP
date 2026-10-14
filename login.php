<?php
include "db.php";
if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$result=mysqli_query($conn,"select * from users where username='$username'");
	if(mysqli_num_rows($result)>0)
	{
		$row=mysqli_fetch_assoc($result);
		if(password_verify($password,$row['password']))
		{
			echo "Login Success";
		}
		else
		{
			echo "Invalid Password";
		}
	}
	else
	{
		echo "Username not Found!";
	}
}
?>
<h2>Login</h2>
<form method="post">
Username:
	<input type="text" name="username"><br>
Password:
	<input type="password" name="password"><br>
	
	<input type="submit" name="login" value="login">
	
	<a href="register.php">New User?</a>
</form>
